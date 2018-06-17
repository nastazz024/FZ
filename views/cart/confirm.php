<?php

use app\components\ComponentsTrait;

$this->registerCssFile('@web/css/confirm.css');

if (empty($items)) { ?>


    <p class="confirm">Корзина пуста!</p>


    <?php
    return;
}


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
            $model = ComponentsTrait::getRacket_accsModel();
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
<p class="confirm">Оформление заказа</p>
<div class="cart-confirm">


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
            if ($sizeModel && $item['size']) {
                $size = $sizeModel::findOne($item['size']);
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
    <div class="cartz-footer">
        <span class="total">Итого</span>
        <span class="price"><?php echo $total ?> руб.</span>
    </div>
    <?php

    /** @var \app\models\User $identity */
    $identity = Yii::$app->user->identity;
    ?>

        <div class="contact">
            <form method="post" action="/cart/complete">
                <fieldset>
                    <div class="row">
                        <section class="col col-2">
                            <label class="input">
                                <i class="fa fa-append fa-user"></i>
                                <input name="name" type="text" placeholder="Имя" required value="<?php echo $identity ? $identity->name : '' ?>"/>
                            </label>
                        </section>
                        <section class="col col-2">
                            <label class="input">
                                <i class="fa fa-append fa-envelope-o"></i>
                                <input name="email" type="email" placeholder="E-mail" required value="<?php echo $identity ? $identity->email : '' ?>"/>
                            </label>
                        </section>
                    </div>
                    <section>
                        <label class="input">
                            <i class="fa fa-append fa-tag"></i>
                            <input name="phone" type="text" placeholder="Телефон" required value="<?php echo $identity ? $identity->phone : '' ?>"/>
                        </label>
                    </section>
                    <section>
                        <div class="checkboxes">
                                                <label class="input">
                            <i class="fa fa-append fa-tag"></i>
                            <input name="address" type="email" placeholder="Адрес доставки" required value=""/>
                        </label>
                    </section>
                    <section>
                        <label class="textarea">
                            <i class="fa fa-append fa-comment"></i>
                            <textarea rows="4" placeholder="Комментарий" name="comment"></textarea>
                        </label>
                    </section>
                    <input type="checkbox" name="genre" id="comedy" value="comedy" />
                    <a href="#" class="button btn" onclick="$('form').submit(); return false;">Оформить</a>
                </fieldset>
                <input type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                       value="<?=Yii::$app->request->csrfToken?>"/>
            </form>
        </div>


</div>
<?php
$script = <<<SCR
var \$cart = $('#cart-container');
        \$cart.on('click', '.js-remove-cart', function (ev) {
            ev.preventDefault();
            window.location.reload();
        });
SCR;

$this->registerJs($script, yii\web\View::POS_READY);