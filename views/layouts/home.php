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
                <a href="/" ><h4 class="dropdown-content__title">Главная</h4></a>

					<h4 class="dropdown-content__title">Магазин</h4>

					<h4 class="dropdown-content__title">Мероприятия</h4>

					<h4 class="dropdown-content__title">League</h4>

                    <h4 class="dropdown-content__title">Контакты</h4>

				
			</div>


		</div>
		<div class="logo">
			<a href="/"><img src="/img/logo.png" alt="" class="logo-img"></a>
		</div>

		<ul class="main-menu main-menu-static">
			<li class="main-menu__item dropdown">
				<a href="/catalog" class="main-menu__link">Магазин</span></a>

			</li>

			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Мероприятия</span></a>

			</li>
			<li class="main-menu__item dropdown">
                <a href="#" class="main-menu__link">League</span></a>

			</li>
            <li class="main-menu__item dropdown">
                <a href="#" class="main-menu__link">Контакты </span></a>

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

<?php $this->endBody() ?>


</body>

</html>
<?php $this->endPage() ?>
