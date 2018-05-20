<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="main-wrapper">

    <header class="header">
		<button class="toggle-menu">
			<span class="icon icon-menu"></span>
		</button>
		

		<div class="dropdown-content dropdown-content--menu">
			<div class="dropdown-content__item">
				
					<h4 class="dropdown-content__title">Мужское</h4>
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="catalog.php" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Шорты и брюки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Куртки и толстовки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Обувь</a>
						</li>
					</ul>
				
					<h4 class="dropdown-content__title">Женское</h4>
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Шорты, брюки, юбки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Куртки и толстовки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Обувь</a>
						</li>
					</ul>
				
					<h4 class="dropdown-content__title">Детское</h4>
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Шорты, брюки, юбки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Куртки и толстовки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Обувь</a>
						</li>
					</ul>
				
			</div>
			<div class="dropdown-content__item">
				

				<h4 class="dropdown-content__title">Ракетки</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Ракетки</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Аксессуары для ракетки</a>
					</li>
				</ul>
				<h4 class="dropdown-content__title">Сумки и аксессуары</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Сумки</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Аксессуары</a>
					</li>
					
				</ul>
				
			</div>
			<div class="dropdown-content__item">
				
				<!--<h4 class="dropdown-content__title"><span class="text-error">Скидка -30%</span> <br>Акции <br><!--Blogids</h4>-->
				<!--<div class="hr"></div>-->

				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link"><h4 class="dropdown-content__title">Доставка</h4></a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link"><h4 class="dropdown-content__title">Оплата</h4></a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link"><h4 class="dropdown-content__title">Контакты</h4></a>
					</li>
					
				</ul>
			</div>
			<!--<div class="dropdown-content__item"></div>-->
			

		</div>
		<div class="logo">
			<a href="#"><img src="/img/logo.png" alt="" class="logo-img"></a>
		</div>

		<ul class="main-menu main-menu-static">
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Одежда <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Мужская</a>
							
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Женская</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Детская</a>
						</li>
						
					</ul>

				</div>
			</li>
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Ракетки <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Ракетки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Аксессуары для ракетки</a>
						</li>
						
					</ul>


				</div>
			</li>
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Обувь <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Мужская</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Женская</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Детская</a>
						</li>
						
					</ul>

				</div>
			</li>
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Сумки и аксессуары <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Сумки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Аксессуары</a>
						</li>
						
					</ul>

				</div>
			</li>
			<li class="main-menu__item">
				<a href="#" class="main-menu__link">Контакты</a>
			</li>
			
		</ul>

		<div class="search">
			<form action="#">
				<input type="text" class="form-control search__input" placeholder="Поиск" />
				<input type="submit" value="&#xe90b;" class="search__button"/>
			</form>
		</div>

		
		
		<ul class="profile-menu">
			<li class="profile-menu__item dropdown dropdown--right dropdown--white" id="cart-container">
			
			</li>
			<li class="profile-menu__item dropdown dropdown--right dropdown--white">
				<a href="#" class="profile-menu__link"><span class="icon-user"></span></a>
				<div class="dropdown-content">
					<ul class="user-menu">
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-user"></span>Профиль</a>
						</li>
						
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-basket"></span>Мои заказы</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-gear"></span>Настройки</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-power"></span>Выйти</a>
						</li>
					</ul>
					
				</div>
			</li>
		</ul>
	</header>

    <main class="main">
        <section class="header-inner" style="background-image: url('/img/header-inner.png');">

            

            <span class="category">мужская</span>
            <h1 class="header-inner__title">ОДЕЖДА</h1>
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
                            <a href="#list" class="filter-list__link"  data-type="list"><span class="icon-list-2"></span></a>
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
                                /** @var \app\models\ProductColor $pcModel */
                                $pcModel = \yii::$app->get('productColor');
                                foreach ($pcModel::find()->orderBy('color')->all() as $item) {
                                    ?>
                                    <li class="check-list__item">
                                        <input type="checkbox" class="styler" id="check-list<?php echo $item->id ?>" value="<?php echo $item->id ?>">
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
                                /*@var \app\models\ShirtSize $psModel */
                                $psModel = \yii::$app->get('shirtSize');
                                foreach ($psModel::find()->orderBy('norder', 'asc')->all() as $item) {
                                    ?>
                                    <li class="check-list__item">
                                        <input type="checkbox" class="styler" id="check-list_<?php echo $item->id ?>" value="<?php echo $item->id ?>">
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
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            <input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;">

                        </div>


                    </div>
                </aside>
                <div class="content">

                    <?= $content ?>


                </div>

            </div>
    </main>

    <footer>

    </footer>

</div>

<?php $this->endBody() ?>


</body>

</html>
<?php $this->endPage() ?>
