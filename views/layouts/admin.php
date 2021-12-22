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

\app\assets\AdminAsset::register($this);

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


    <header class="header">
		<button class="toggle-menu">
			<span class="icon icon-menu"></span>
		</button>



		<div class="logo">
			<a href="/"><img src="/img/logo.png" alt="" class="logo-img"></a>
		</div>

		<ul class="main-menu main-menu-static">
			<li class="main-menu__item dropdown">
				<a href="/admin/shop" class="main-menu__link">Магазин</span></a>

			</li>
			<li class="main-menu__item dropdown">
				<a href="/admin/tournaments" class="main-menu__link">Соревнования</span></a>

			</li>
			<li class="main-menu__item dropdown">
				<a href="/admin/players" class="main-menu__link">Игроки</span></a>

			</li>


		</ul>


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



<?php $this->endBody() ?>


</body>

</html>
<?php $this->endPage() ?>
