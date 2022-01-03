<?php

use yii\helpers\Html;
use app\assets\AppAsset;

\app\assets\TourAsset::register($this);
$this->title = 'Соревнования';


/** @var string $dateFrom */
/** @var string $dateTo */


if (empty($dateFrom)) {
    $dateFrom = date('Y-m-d', strtotime('-1 month'));
}
if (empty($dateTo)) {
    $dateTo = date('Y-m-d', strtotime('now'));
}

$maxDate = date('Y-m-d');


$tours = \app\models\Tournament::getCompletedByDates($dateFrom, $dateTo);


?>


<div class="container tour">
    <div class="row show-grid" style="line-height: 34px;">
        <form>
            <div class="col-md-2">
                Турниры за период:
            </div>
            <div class="col-md-3">
                <input type="text" name="d" value="<?= $dateFrom ?> - <?= $dateTo ?>" class="form-control"/>
            </div>
            <div class="col-md-1">
                <input type="submit" class="btn btn-primary" value="Поиск"/>
            </div>
        </form>
    </div>

    <?php
    if (count($tours)) { ?>
        <div class="row show-grid" style="line-height: 34px; margin-left: 0px;">
            &nbsp;
        </div>

        <!--        <h3>Турниры за период: --><?//= $dateFrom ?><!-- - --><?//=$dateTo ?><!--</h3>-->
        <?php

        foreach ($tours as $tour) { ?>
            <div class="row show-grid" style="line-height: 34px; margin-left: 0px;">
                <a href="/tour/view/<?= $tour->id ?>"><?= $tour->name ?></a>
            </div>
        <?php
        }
    }
    ?>


</div>

<?php
$this->registerJs(
    <<<JS
    $(function() {
        $('input[name="d"]').daterangepicker({
            minYear: 2000,
            maxDate: "{$maxDate}",
            locale: {
                format: 'YYYY-MM-DD'
            },
            opens: 'right'
        }, function(start, end, label) {
        });
        
    });

JS
    ,
    yii\web\View::POS_READY
);
?>
