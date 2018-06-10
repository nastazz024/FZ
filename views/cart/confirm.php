<?php

use app\components\ComponentsTrait;

$this->registerCssFile('@web/css/confirm.css');

$total = 0;


///  все размерв маек
/// $product->sizes

?>
<div class="cart-confirm">
    <h2>Оформление заказа</h2>

    <ul class="cartz-list__item">
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
                    $model = ComponentsTrait::getRacket_accsModel();
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
            if ($sizeModel && $product->size) {
                $size = $sizeModel::findOne($product->size);
            }


            echo $this->render('_confirm-item', [
                'item' => $item,
                'size' => $size,
                'product' => $product,
                'colors' => $colors,
                'categories' => $categories,
                'key' => $key,
            ]);


        } ?>
    </ul>

    <?php

    /** @var User $identity */
    $identity = Yii::$app->user->identity;
    ?>

    <input name="email" value="<?php echo $identity ? $identity->email : '' ?>"/>

    <a href="#" class="btn">Оформить</a>


</div>