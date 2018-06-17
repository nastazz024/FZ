<?php $this->beginContent('@app/views/layouts/catalog.php'); ?>
<section class="header-inner" style="background-image: url('/img/menu-banner_2.jpg');">


    <h1 class="header-inner__title">РАКЕТКИ</h1>
</section>
<div class="tab-wrap">
    <div class="filter">
        <div class="filter-sidebar">
            <button class="toggle-filter">
                <span class="icon-sliders"></span>
                <span class="sr-only">Фильтр</span>
            </button>
            <span class="filter__title">Найдено товаров: <span id="pr_cnt"></span> </span>
        </div>
        <div class="filter-content">
            <span class="filter__title">Сортировать по:</span>
            <div class="sort">
                <label class="menu__sort active" data-type="price">
                    Цене
                    <span class="arrow-up"><i class="fas fa-long-arrow-alt-up"></i></span>
                    <span class="arrow-down"><i class="fas fa-long-arrow-alt-down"></i></span>
                </label>
                <label class="menu__sort" data-type="name">
                    Наименованию
                    <span class="arrow-up"><i class="fas fa-long-arrow-alt-up"></i></span>
                    <span class="arrow-down"><i class="fas fa-long-arrow-alt-down"></i></span>
                </label>


            </div>
            <ul class="filter-list tabs">
                <li class="filter-list__item">
                    <a href="#list" class="filter-list__link" data-type="list"><span class="icon-list-2"></span></a>
                </li>
                <li class="filter-list__item active">
                    <a href="#grid" class="filter-list__link" data-type="grid"><span class="icon-list"></span></a>
                </li>
            </ul>

        </div>
    </div>

    <div class="box-main">
        <aside class="sidebar">
            <div class="accordion">
                <div class="accordion__head open">
                    <h5 class="accordion__title">Баланс</h5>
                    <span class="icon-minus"></span>
                </div>
                <div class="accordion__body">
                    <ul class="check-list" id="balance-filter">
                        <?php
                        /** @var \app\models\RacketBalance $pcModel */
                        $pcModel = \yii::$app->get('racketBalance');
                        foreach ($pcModel::find()->orderBy('balance')->all() as $item) {
                            ?>
                            <li class="check-list__item">
                                <input type="checkbox" class="styler" id="check-list<?php echo $item->id ?>"
                                       value="<?php echo $item->id ?>">
                                <label for="check-list<?php echo $item->id ?>"
                                       class="check-list__text"><?php echo $item->balance ?></label>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>

                </div>

                <div class="accordion__head">
                    <h5 class="accordion__title">Жесткость</h5>
                    <span class="icon-minus"></span>
                </div>

                <div class="accordion__body" id="hole-filter">
                    <ul class="check-list check-list--column ">


                                    <?php
                                    /** @var \app\models\RacketHole $pcModel */
                                    $pcModel = \yii::$app->get('racketHole');
                                    foreach ($pcModel::find()->orderBy('hole')->all() as $item) {
                                    ?>
                        <li class="check-list__item">
                            <input type="checkbox" class="styler" id="check-list_<?php echo $item->id ?>"
                                   value="<?php echo $item->id ?>">
                            <label for="check-list_<?php echo $item->id ?>"
                                   class="check-list__text"><?php echo $item->hole ?></label>
                        </li>
                        <?php
                        }
                        ?>



                    </ul>
                </div>
                <div class="accordion__head">
                    <h5 class="accordion__title">Цена</h5>
                    <span class="icon-minus"></span>
                </div>
                <div class="accordion__body" style="display: none;">

                    <div id="slider-range"></div>
                    <input type="text" id="amount" readonly style="margin-top:5px; float:left; width:30px; border:0; color:#7d7d7d; font-weight:bold;">
                    <input type="text" id="amount1" readonly style="margin-top:5px; float:right; width:30px; border:0; color:#7d7d7d; font-weight:bold;">

                </div>


            </div>
        </aside>
        <div class="content">

            <?= $content ?>


        </div>

    </div>
<?php $this->endContent(); ?>