<?php

use app\models\DrawPlayersMatches;
use yii\helpers\Html;
use app\assets\AppAsset;

/** @var \app\models\Tournament $tour */

$model = $tour;

\app\assets\TourAsset::register($this);
$this->title = '' . $tour->name;


/** @var \app\models\Draws[] $draws */
$draws = $tour->getDraws()->where('completed=1')->all();

$classes = [];
$types = [];

foreach ($draws as $draw) {
    $classes[] = $draw->class;
    $types[$draw->class][] = $draw->type;
}
$classes = array_values(array_unique($classes));
array_walk($types, function ($a) {
    return array_values(array_unique($a));
});
sort($classes);

//echo '<pre>'; print_r($classes); echo '</pre>';
//echo '<pre>'; print_r($types); echo '</pre>';

if (empty($currClass)) {
    $currClass = reset($classes);
}
if (empty($currType)) {
    $currType = reset($types[$currClass]);
}

?>

<div class="container tour">
    <div class="row show-grid">
    <h2><?= $this->title ?></h2>
    </div>
    <div class="row show-grid" style="line-height: 34px;">
        <form id="form">
            <div class="form-group">
                <input type="hidden" name="cl"/>
                <input type="hidden" name="t"/>
            <select id="cl" class="form-control" style="width: 100px; display: inline-block;">
                <?php
                foreach ($classes as $class) { ?>
                    <option value="<?= $class ?>" <?= ($currClass == $class ? 'selected="selected"' : '') ?>><?= $class ?></option>
                <?php }
                ?>
            </select>
                <select id="t" class="form-control" style="width: 120px; display: inline-block;">
                    <?php
                    foreach ($types[$currClass] as $type) {
                        $title = [
                            'group' => 'группа',
                            'olymp' => 'олимпийка',
                        ];
                        ?>

                        <option value="<?= $type ?>" <?= ($type == $currType ? 'selected="selected"' : '') ?>><?= $title[$type] ?></option>
                    <?php }
                    ?>
                </select>

            </div>
        </form>
    </div>

<?php




if ($currType == 'olymp') {
    foreach ($draws as $draw) {
        if ($draw->type == $currType && $draw->class == $currClass) {
            break;
        }
    }


    $olympData = $draw->getOlympData();


    $oCnt = count($olympData);

    echo $this->render('/_helper/olymp-grid-styles', [
        'oCnt' => $oCnt,
        'simple' => true,
    ])


    ?>
    <div class="tournament-players">
        <div class="draws-score">

            <?php

            $cnt = count($olympData);


            $roundCount = count($olympData);
?>
            <div class="draw-score olymp g-tree">
                <?php
            for ($rInd = 0; $rInd < $roundCount; $rInd++) {
                for ($topInd = 0; $topInd < count($olympData[$rInd]); $topInd++) {
                    $data = $olympData[$rInd][$topInd] ?? null;
                    if (empty($data)) {
                        continue;
                    }
                    $drPlId1 = $data['dr_player1']->id;
                    $drPlId2 = $data['dr_player2']->id ?? null;

                    echo '<div class="i' . ($rInd + 1) . ($topInd*2 + 1) . ' item">';

                        echo $data['dr_player1']->getPlayer()->one()->name;

                        echo '<br/>';

                        $dis = $draw->completed ? ' disabled="disabled"' : '';
                        for ($z = 0; $z < $draw->matches_count; $z++) {
                            $score1 = $data['matches'][$z]->player1_score ?? '';
                            $score2 = $data['matches'][$z]->player2_score ?? '';

        //                    echo "<input class='score' type='number' size=1 min=0 max=30 name='nscore[" . $z . "][" . $drPlId1 . "]' value='" . ($score1) . "'" . $dis . ">
        //                                / <input class='score' type='number' size=1 min=0 max=30 name='nscore[" . $z . "][" . $drPlId2 . "]' value='" . ($score2) . "'" . $dis . "><br/>";
                        }

                        echo '</div>';

                    echo '<div class="i' . ($rInd + 1) . ($topInd*2 + 2) . ' item">';
                    if ( $data['dr_player2']) {
                        echo $data['dr_player2']->getPlayer()->one()->name;

                        echo '<br/>';

                        $dis = $draw->completed ? ' disabled="disabled"' : '';
                        for ($z = 0; $z < $draw->matches_count; $z++) {
                            $score1 = $data['matches'][$z]->player1_score ?? '';
                            $score2 = $data['matches'][$z]->player2_score ?? '';

                            //                    echo "<input class='score' type='number' size=1 min=0 max=30 name='nscore[" . $z . "][" . $drPlId1 . "]' value='" . ($score1) . "'" . $dis . ">
                            //                                / <input class='score' type='number' size=1 min=0 max=30 name='nscore[" . $z . "][" . $drPlId2 . "]' value='" . ($score2) . "'" . $dis . "><br/>";
                        }
                    }
                        echo '</div>';



                    }
                }


                if (!empty($olympData[$roundCount - 1][0]['winner']['player'])) {
                    $col = $roundCount + 1;
                    echo "<div class='i{$col}1 item'><div>";
                    echo '<b>' . $olympData[$roundCount - 1][0]['winner']['player']->name . '</b>';
                    echo "</div></div>";
                }

                echo '</div>';

                ?>


        </div>
    </div>




    <?php
}


if ($currType === 'group') {
    $buf = [];
    foreach ($draws as $draw) {
        if ($draw->type == $currType && $draw->class == $currClass) {
            $buf[] = $draw;
        }
    }




    $occupiedClasses = [];
    foreach ($buf as $draw) {
        $occupiedClasses[] = $draw->class;
    }
    $occupiedClasses = array_unique($occupiedClasses);

    ?>
        <div class="tournament-players">

                <?php
                foreach ($occupiedClasses as $ci => $class) {
                     ?>

                            <div class="panel-body">

                                <?php


                                $classDraws = [];
                                foreach ($draws as $draw) {
                                    if ($draw->class != $class) {
                                        continue;
                                    }
                                    $classDraws[] = $draw;
                                }


                                $i = 0;
                                $grDic = 'ABCDEFGHJKLMNOPQRST';

                                foreach ($classDraws as $clDraw) {
                                    $winners = $clDraw->sortGroupPlayersByScore();
//            echo '<pre>'; print_r($winners); echo '</pre>'; //exit;
                                    $extScores = [];
                                    /** @var DrawPlayersMatches[] $extdraws */
                                    $extdraws = DrawPlayersMatches::find()->where([
                                        'draw_id' => $clDraw->id,
                                    ])->orderBy('id')->all();
                                    foreach ($extdraws as $extdraw) {
                                        $extScores[$extdraw->draw_player1][$extdraw->draw_player2][] = $extdraw->player1_score;
                                        $extScores[$extdraw->draw_player2][$extdraw->draw_player1][] = $extdraw->player2_score;
                                    }
//            echo '<pre>'; print_r($extScores); echo '</pre>';
                                    $grName = $grDic[$i] ?? '';
                                    ?>
                                    <h3>Группа <?= $grName ?></h3></br>
                                    <?php
                                    /** @var \app\models\DrawPlayers[] $pls */
                                    $pls = $clDraw->getDrawPlayers()->all();
                                    $drPls = [];
                                    ?>

                                        <table class='draw-score show' style="float: left; display: inline-block;">
                                            <tr>
                                                <th></th>

                                                <?php
                                                foreach ($pls as $pl) {
                                                    /** @var \app\models\Player $buf */
                                                    $buf = $pl->getPlayer()->one();
//                        echo $buf->id . ' - ';
                                                    echo "<th class='big'>" . $buf->name . '</th>';
                                                    $drPls[$pl->id] = $buf;
                                                }
                                                echo "</tr>";


                                                $pass = [];
                                                $last = end($drPls);
                                                foreach ($drPls as $drPlId1 => $pl1) {
                                                    if ($pl1 == $last) {
                                                        continue;
                                                    }
                                                    echo "<tr>";
                                                    echo "<th class='big'>" . $pl1->name . '</th>';
                                                    foreach ($drPls as $drPlId2 => $pl2) {
                                                        echo "<td>";
                                                        if ($drPlId1 == $drPlId2) {
                                                            continue;
                                                        }
                                                        if (isset($pass[$drPlId1 . '-' . $drPlId2])) {
                                                            continue;
                                                        }
                                                        for ($z = 0; $z < $clDraw->matches_count; $z++) {
                                                            echo ($extScores[$drPlId1][$drPlId2][$z] ?? '') .
                                                                '-'.
                                                                ($extScores[$drPlId2][$drPlId1][$z] ?? '');
                                                            echo ' &nbsp; ';

                                                        }
                                                        echo "</td>";
                                                    }
                                                    echo "</tr>";
                                                }

                                                echo "</table>";

                                                ?>
                                                <div class="" style="float: left; margin-left: 20px;">
                                                    <b>Победители: <br/></b>
                                                    <?php
                                                    //                        echo '<pre>'; print_r($winners); echo '</pre>';
                                                    $x = 1;
                                                    foreach ($winners as $winner) {
                                                        echo $winner['player']->name;
                                                        if ($x == $clDraw->winners_count) {
                                                            break;
                                                        } else {
                                                            echo '<br/>';
                                                        }
                                                        $x++;
                                                    }

                                                    ?>
                                                </div>
                                                <div class="clear"></div>


                                    <?php
                                    $i++;
                                    echo '</br></br><div class="clear"></div>';
                                }

                                ?>
                    </div>

                    <?php
                }

                ?>


        </div>




<?php
}

?>

</div>

<?php
$this->registerJs(
    <<<JS
    \$(function() {
        \$('#form select#cl').on('change', function(e) {
            var \$form = $(e.target).parents('form');
            
            \$form.find('[name=cl]').val($(e.target).val());
            \$form.find('[name=t]').val('');
            \$form.submit();
        });
        \$('#form select#t').on('change', function(e) {
            var \$form = $(e.target).parents('form');
            
            \$form.find('[name=cl]').val($('#form select#cl').val());
            \$form.find('[name=t]').val($(e.target).val());
            \$form.submit();
        });
    });
JS
    ,
    yii\web\View::POS_READY
);
?>
