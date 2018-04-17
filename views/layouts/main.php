<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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




<h2>Главная страница</h2>











<div class="wrap">
   <header class="header">
		<button class="toggle-menu">
			<span class="icon icon-menu"></span>
		</button>
		<div class="dropdown-content dropdown-content--menu">
			<div class="dropdown-content__item">
				
					<h4 class="dropdown-content__title">Мужское</h4>
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Майки</a>
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
				
				<!--<h4 class="dropdown-content__title"><span class="text-error">Скидка -30%</span> <br>Акции <br></h4>-->
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
			<a href="#"><img src="img/logo.png" alt=""></a>
		</div>

		

		<div class="search">
			<form action="#">
				<input type="text" class="form-control search__input" placeholder="Поиск" />
				<input type="submit" value="&#xe90b;" class="search__button"/>
			</form>
		</div>

		<div class="location">
			<span class="icon-pin"></span>
			<a href="#" class="location__link">Беларусь / Br</a>
		</div>
		
		<ul class="profile-menu">
			<li class="profile-menu__item dropdown dropdown--right dropdown--white">
				<a href="#" class="profile-menu__link">
					<span class="basket">
						<span class="icon-bag"></span>
						<span class="badge">3</span>
					</span>
					<span class="b-price">165 руб.</span>
				</a>
				<div class="dropdown-content">
					<div class="cart">
						<ul class="cart-list">
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="img/badminton-tee-pontiac-fzforza.jpg" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#">Pontiak Tee </a></h6>
									<div class="cart-list__details">
										<span class="price">30 руб.</span>
										<span class="product__details">
											<span>S</span> • 
											<span>Голубой</span> • 
											<span>1 шт.</span>  
										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="#" class="js-remove-cart">
										<span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</li>
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="img/badminton-tee-palermo-fzforza.jpg" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#">Palermo Tee</a></h6>
									<div class="cart-list__details">
										<span class="price price--danger">120 руб.</span>
										<span class="product__details">  
											<span>XXL</span> • 
											<span>Голубой</span> • 
											<span>3 шт.</span>  
										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="#" class="js-remove-cart">
										<span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</li>
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="img/badminton-polo-gage-fzforza_1.png" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#">Gage polo</a></h6>
									<div class="cart-list__details">
										<span class="price">60 руб.</span>
										<span class="product__details">
											<span>M</span> • 
											<span>Синий</span> • 
											<span>2 шт.</span>  
										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="#" class="js-remove-cart">
										<span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</li>
						</ul>
						<div class="cart-footer">
							<span class="total">Итого</span>
							<span class="price">210 руб.</span>
							<a href="#" class="btn">Оформить</a>
						</div>
					</div>
				</div>
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

    <div class="container">
        <!--<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>-->
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
