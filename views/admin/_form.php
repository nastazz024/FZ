<?php
/** @var \app\components\ManageableIntegface $model */

if (!$model) {
    return;
}

?>

<form action="" method="get">
    <input type="hidden" name="m" value="<?= $m ?>"/>
    <?php
    foreach ($model->getSearchFields() as $name => $params) {
        $searchVal = \yii::$app->get('request')->get($name);
        switch ($params['type']) {
            case 'text':
                echo "<input type='text' name='{$name}' value='{$searchVal}'/>";
                break;

            case 'list':
                echo "<select name='{$name}'>";
                echo "<option value=''>";
                foreach ($model->getSearchListOptions($params) as $id => $val) {
                    $s = $searchVal == $id ? 'selected' : '';
                    echo "<option value='{$id}' {$s}>{$val}";
                }
                echo "</select>";
                break;
        }

    }
    ?>

    <br/>
    <input type="submit" value="поиск">
    <br/>
    <input type="button" value="сбросить" data-type="clear">
</form>
