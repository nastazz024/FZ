Здравствуйте, <?php echo $name ?>, вы сделали заказ на сайте fz-forza.by.
<br/>
В ближайшее время с вами свяжется менеджер.
<br/>
<?php

use app\components\ComponentsTrait;

$total = 0;
$model = null;
foreach ($items as $key => $item) {
    switch ($item['type']) {
        case 'shirt':
            $model = ComponentsTrait::getShirtModel();
            break;

        case 'short':
            $model = ComponentsTrait::getShortModel();
            break;

        case 'jacket':
            $model = ComponentsTrait::getJacketModel();
            break;

        case 'shoes':
            $model = ComponentsTrait::getShoesModel();
            break;

        case 'shuttle':
            $model = ComponentsTrait::getShuttleModel();
            break;

        case 'bag':
            $model = ComponentsTrait::getShirtModel();
            break;

        case 'racket':
            $model = ComponentsTrait::getRacketModel();
            break;

        case 'racket_accs':
            $model = ComponentsTrait::getRacketAccsModel();
            break;

        case 'accs':
            $model = ComponentsTrait::getAccsModel();
            break;
    }

    if (!$model) {
        continue;
    }
    $product = $model::findOne($item['id']);
    $total += $product->price * $item['qty'];
}

?>
<p>Заказ:</p>
<div>
    <ul>

        <?php
        foreach ($items as $key => $item) {
            $colors = null;
            $categories = null;
            $model = null;
            $sizeModel = null;
            switch ($item['type']) {
                case 'shirt':
                    $model = ComponentsTrait::getShirtModel();
                    $colors = ComponentsTrait::getShirtColors();
                    $categories = ComponentsTrait::getShirtCategories();
                    $sizeModel =  ComponentsTrait::getShirtSizeModel();
                    break;

                case 'short':
                    $model = ComponentsTrait::getShortModel();
                    $categories = ComponentsTrait::getShortCategories();
                    break;

                case 'jacket':
                    $model = ComponentsTrait::getJacketModel();
                    $categories = ComponentsTrait::getJacketCategories();
                    break;

                case 'shoes':
                    $model = ComponentsTrait::getShoesModel();
                    $categories = ComponentsTrait::getShoesCategories();
                    break;

                case 'shuttle':
                    $model = ComponentsTrait::getShuttleModel();
                    break;

                case 'bag':
                    $model = ComponentsTrait::getShirtModel();
                    break;

                case 'racket':
                    $model = ComponentsTrait::getRacketModel();
                    break;

                case 'racket_accs':
                    $model = ComponentsTrait::getRacketAccsModel();
                    break;

                case 'accs':
                    $model = ComponentsTrait::getAccsModel();
                    break;
            }

            if (!$model) {
                continue;
            }

            $size = null;
            $product = $model::findOne($item['id']);
            if ($sizeModel && $item['size']) {
                $size = $sizeModel::findOne($item['size']);
            }


            echo $this->render('_order-item', [
                'item' => $item,
                'size' => $size,
                'product' => $product,
                'colors' => $colors,
                'categories' => $categories,
                'key' => $key,
                'images' => $images,
                'message' => isset($message) ? $message : null,
            ]);


        } ?>
    </ul><br>
   Адрес:
    <?php echo $address?>
<br>
    Телефон:
    <?php echo $phone?>

    <br>
    Email:
    <?php echo $email?>


    <br>
    Комментарий:


    <?php echo $comment ?><br/>
