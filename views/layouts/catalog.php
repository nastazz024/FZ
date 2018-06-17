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


/** @var User $identity */
$identity = Yii::$app->user->identity;
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
<script>
    var _layout = '<?php echo \yii::$app->get('request')->get('layout') ?>';
    var _kind = '<?php echo \yii::$app->get('request')->get('kind') ?>';
</script>
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
							<a href="/catalog/shirt/man" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/short/man" class="dropdown-menu__link">Шорты и брюки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/jacket/man" class="dropdown-menu__link">Куртки и толстовки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/shoes/man" class="dropdown-menu__link">Обувь</a>
						</li>
					</ul>
				
					<h4 class="dropdown-content__title">Женское</h4>
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="/catalog/shirt/woman" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/short/woman" class="dropdown-menu__link">Шорты, брюки, юбки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/jacket/woman" class="dropdown-menu__link">Куртки и толстовки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/shoes/woman" class="dropdown-menu__link">Обувь</a>
						</li>
					</ul>
				
					<h4 class="dropdown-content__title">Детское</h4>
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="/catalog/shirt/kids" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/short/kids" class="dropdown-menu__link">Шорты, брюки, юбки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/jacket/kids" class="dropdown-menu__link">Куртки и толстовки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/shoes/kids" class="dropdown-menu__link">Обувь</a>
						</li>
					</ul>
				
			</div>
			<div class="dropdown-content__item">
				

				<h4 class="dropdown-content__title">Ракетки</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="/catalog/racket" class="dropdown-menu__link">Ракетки</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Аксессуары для ракетки</a>
					</li>
				</ul>
				<h4 class="dropdown-content__title">Сумки и аксессуары</h4>
				<ul class="dropdown-menu">
					<li class="dropdown-menu__item">
						<a href="/catalog/bag" class="dropdown-menu__link">Сумки</a>
					</li>
					<li class="dropdown-menu__item">
						<a href="#" class="dropdown-menu__link">Аксессуары</a>
					</li>
					
				</ul>

                <a href="/catalog/shuttle" ><h4 class="dropdown-content__title">Воланы</h4></a>

				
			</div>

			<!--<div class="dropdown-content__item"></div>-->
			

		</div>
		<div class="logo">
			<a href="/"><img src="/img/logo.png" alt="" class="logo-img"></a>
		</div>

		<ul class="main-menu main-menu-static">
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Женщинам<span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="/catalog/shirt/woman" class="dropdown-menu__link">Майки</a>
							
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/short/woman" class="dropdown-menu__link">Шорты, брюки, юбки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/jacket/woman" class="dropdown-menu__link">Куртки и толстовки</a>
						</li>
                        <li class="dropdown-menu__item">
                            <a href="/catalog/shoes/woman" class="dropdown-menu__link">Обувь</a>
                        </li>
					</ul>

				</div>
			</li>

			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Мужчинам<span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">

						<li class="dropdown-menu__item">
							<a href="/catalog/shirt/man" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/short/man" class="dropdown-menu__link">Шорты и брюки</a>
						</li>
                        <li class="dropdown-menu__item">
                            <a href="/catalog/jacket/man" class="dropdown-menu__link">Куртки и толстовки</a>
                        </li>
                        <li class="dropdown-menu__item">
                            <a href="/catalog/shoes/man" class="dropdown-menu__link">Обувь</a>
                        </li>
					</ul>

				</div>
			</li>
			<li class="main-menu__item dropdown">
                <a href="#" class="main-menu__link">Детям<span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="/catalog/shirt/kids" class="dropdown-menu__link">Майки</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="/catalog/short/kids" class="dropdown-menu__link">Шорты, брюки, юбки</a>
						</li>
                        <li class="dropdown-menu__item">
                            <a href="/catalog/jacket/kids" class="dropdown-menu__link">Куртки и толстовки</a>
                        </li>
                        <li class="dropdown-menu__item">
                            <a href="/catalog/shoes/kids" class="dropdown-menu__link">Обувь</a>
                        </li>
					</ul>

				</div>
			</li>
            <li class="main-menu__item dropdown">
                <a href="#" class="main-menu__link">Ракетки <span class="icon-caret"></span></a>
                <div class="dropdown-content">
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu__item">
                            <a href="/catalog/racket" class="dropdown-menu__link">Ракетки</a>
                        </li>
                        <li class="dropdown-menu__item">
                            <a href="/catalog/racket_accs" class="dropdown-menu__link">Аксессуары для ракетки</a>
                        </li>

                    </ul>


                </div>
            </li>
            <li class="main-menu__item dropdown">
                <a href="#" class="main-menu__link">Сумки и аксессуары<span class="icon-caret"></span></a>
                <div class="dropdown-content">
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu__item">
                            <a href="/catalog/bag" class="dropdown-menu__link">Сумки</a>
                        </li>
                        <li class="dropdown-menu__item">
                            <a href="/catalog/accs" class="dropdown-menu__link">Аксессуары</a>
                        </li>

                    </ul>

                </div>
            </li>
            <li class="main-menu__item dropdown">
                <a href="/catalog/shuttle" class="main-menu__link">Воланы</a>

            </li>

			
		</ul>

<!--        <div class="search">
            <form action="#">
                <input type="text" class="form-control search__input" placeholder="Поиск" />
                <input type="submit" value="&#xe90b;" class="search__button"/>
            </form>
		</div>

		-->
		
		<ul class="profile-menu">
			<li class="profile-menu__item dropdown dropdown--right dropdown--white" id="cart-container">
			
			</li>
			<li class="profile-menu__item dropdown dropdown--right dropdown--white">
				<!--<a href="#" class="profile-menu__link"><span class="icon-user"></span></a>
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
					
				</div>-->
                <?php echo $this->render('//partial/user-menu') ?>
			</li>
		</ul>
	</header>

    <main class="main">

                    <?= $content ?>

    </main>

    <footer>

    </footer>

</div>

<?php echo $this->render('//partial/thank-you'); ?>
<script type="text/html" id="preloader">
<?php echo $this->render('//partial/preloader'); ?>
</script>

<?php $this->endBody() ?>


</body>

</html>
<?php $this->endPage() ?>
