<?php
/** @var \app\components\ManageableIntegface $model */
/** @var string $m */

if (!$model) {
    return;
}

?>

<form action="" method="get" class="form-inline">
    <input type="hidden" name="m" value="<?= $m ?>"/>
    <?php
    foreach ($model->getSearchFields() as $name => $params) {
        echo '<div class="form-group">';
        $searchVal = \yii::$app->get('request')->get($name);
        switch ($params['type']) {
            case 'text':
                echo "<input type='text' name='{$name}' value='{$searchVal}' class=\"form-control\"/>";
                break;

            case 'list':
                echo "<select name='{$name}' class=\"form-control\">";
                echo "<option value=''>";
                foreach ($model->getSearchListOptions($params) as $id => $val) {
                    $s = $searchVal == $id ? 'selected' : '';
                    echo "<option value='{$id}' {$s}>{$val}";
                }
                echo "</select>";
                break;
        }
        echo '</div>';
    }
    ?>

    <div class="form-group"><input type="submit" value="поиск" class="btn btn-primary"></div>
        <div class="form-group"><input type="button" value="сбросить" data-type="clear" class="btn btn-info"></div>
</form>
