<?php $this->beginContent('@app/views/layouts/catalog.php'); ?>
<section class="header-inner" style="background-image: url('/img/header-inner.png');">


    <span class="category"><?php echo \yii::$app->get('request')->get('kind') ?></span>
    <h1 class="header-inner__title">Шорты и брюки</h1>
</section>
<div class="tab-wrap">
    <div class="filter">
        <div class="filter-sidebar">
            <button class="toggle-filter">
                <span class="icon-sliders"></span>
                <span class="sr-only">Фильтр</span>
            </button>
            <?php /*
						$query = "SELECT COUNT(*) as row_count FROM `product` WHERE category='1'";
						$result = mysql_query($query);

						$max = mysql_fetch_array($result);
						echo '
						<span class="filter__title">Найдено товаров: '.$max['row_count'].' </span>'
                   */ ?>
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
                    <h5 class="accordion__title">Цвет:</h5>
                    <span class="icon-minus"></span>
                </div>
                <div class="accordion__body">
                    <ul class="check-list" id="colors-filter">
                        <!--<li class="check-list__item">
                            <input type="checkbox" class="styler" id="check-list1">
                            <label for="check-list1" class="check-list__text">Черный</label>
                        </li>-->

                        <?php
                        /** @var \app\models\ShortColor $pcModel */
                        $pcModel = \yii::$app->get('shortColor');
                        foreach ($pcModel::find()->orderBy('color')->all() as $item) {
                            ?>
                            <li class="check-list__item">
                                <input type="checkbox" class="styler" id="check-list<?php echo $item->id ?>"
                                       value="<?php echo $item->id ?>">
                                <label for="check-list<?php echo $item->id ?>"
                                       class="check-list__text"><?php echo $item->color ?></label>
                            </li>
                            <?php
                        }
                        ?>


                    </ul>

                </div>

                <div class="accordion__head">
                    <h5 class="accordion__title">Размер</h5>
                    <span class="icon-minus"></span>
                </div>

                <div class="accordion__body" id="size-filter">
                    <ul class="check-list check-list--column ">
                        <?php
                        /*@var \app\models\ShortSize $psModel */
                        $psModel = \yii::$app->get('shortSize');
                        foreach ($psModel::find()->orderBy('norder', 'asc')->all() as $item) {
                            ?>
                            <li class="check-list__item">
                                <input type="checkbox" class="styler" id="check-list_<?php echo $item->id ?>"
                                       value="<?php echo $item->id ?>">
                                <label for="check-list_<?php echo $item->id ?>"
                                       class="check-list__text"><?php echo $item->name ?></label>
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