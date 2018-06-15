<?php

/** @var User $identity */
$identity = Yii::$app->user->identity;
?>

<a href="#" class="profile-menu__link"><span class="icon-user"></span></a>
<?php if (!empty($identity)) { ?>
    <div class="dropdown-content">
        <ul class="user-menu">
            <li class="user-menu__item">
                <a href="/user/profile" class="user-menu__link"><span class="icon-user"></span>Профиль</a>
            </li>

            <!--						<li class="user-menu__item">
                                        <a href="#" class="user-menu__link"><span class="icon-basket"></span>Мои заказы</a>
                                    </li>
                                    <li class="user-menu__item">
                                        <a href="#" class="user-menu__link"><span class="icon-gear"></span>Настройки</a>
                                    </li>
            -->						<li class="user-menu__item">
                <a href="/user/logout" class="user-menu__link"><span class="icon-power"></span>Выйти</a>
            </li>
        </ul>

    </div>
<?php } else { ?>
    <div class="dropdown-content">
        <ul class="user-menu">
            <a href="/user/login" class="user-menu__link "><span class="icon-power"></span> Войти</a>
            </li>
        </ul>
        <ul class="user-menu">
            <a href="/user/login" class="user-menu__link"><span class="icon-power"></span>Регистрация</a>
            </li>
        </ul>

    </div>
<?php } ?>

