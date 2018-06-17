<?php


$layout = \yii::$app->get('request')->get('layout');
$kind = \yii::$app->get('request')->get('kind');




switch ($layout) {
    case 'shoes':
        $kind .= '2';
        break;
}

echo \yii::t('app', $kind);
