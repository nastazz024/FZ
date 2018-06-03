<?php $this->beginContent('@app/views/layouts/catalog.php'); ?>
<section class="header-inner" style="background-image: url('/img/header-inner.png');">


    <span class="category"><?php echo \yii::$app->get('request')->get('kind') ?></span>
    <h1 class="header-inner__title">РАКЕТКИ</h1>
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
            todo
        </aside>
        <div class="content">

            <?= $content ?>


        </div>

    </div>
<?php $this->endContent(); ?>