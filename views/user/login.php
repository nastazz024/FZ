<?php

$this->registerCssFile('@web/css/login.css');
if (!isset($act)) {
    $act = 'login';
}

//print_r($errors);
?>
<div class="login-page">
    <div class="form">
        <?php

        if (!empty($message)) { ?>
            <h1 class="login-error"><?php echo $message ?></h1>
        <?php } ?>

        <form class="register-form flip" method="post" <?php echo $act != 'register' ? 'style="display: none;"' : '' ?>>
            <?php echo isset($errors['login'][0]) ? '<h2 class="login-error">' . $errors['login'][0] . '</h2>' : '' ?>
            <input type="text" placeholder="Логин" name="login" value="<?php echo isset($login) ? $login : '' ?>"/>
            <?php echo isset($errors['name'][0]) ? '<h2 class="login-error">' . $errors['name'][0] . '</h2>' : '' ?>
            <input type="text" placeholder="Имя" name="name" value="<?php echo isset($name) ? $name : '' ?>"/>
            <?php echo isset($errors['phone'][0]) ? '<h2 class="login-error">' . $errors['phone'][0] . '</h2>' : '' ?>
            <input type="text" placeholder="Телефон" name="phone" value="<?php echo isset($phone) ? $phone : '' ?>"/>
            <?php echo isset($errors['email'][0]) ? '<h2 class="login-error">' . $errors['email'][0] . '</h2>' : '' ?>
            <input type="text" placeholder="Email" name="email" value="<?php echo isset($email) ? $email : '' ?>"/>
            <?php echo isset($errors['password'][0]) ? '<h2 class="login-error">' . $errors['password'][0] . '</h2>' : '' ?>
            <input type="password" placeholder="Пароль" name="password"/>
            <button>Регистрация</button>
            <p class="message">Уже зарегистрированы? <a href="#" class="flipper">Вход</a></p>
            <input type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                   value="<?=Yii::$app->request->csrfToken?>"/>
            <input type="hidden" name="act" value="register" />
        </form>

        <form class="login-form flip flipped" method="post" <?php echo $act != 'login' ? 'style="display: none;"' : '' ?>>
            <input type="text" placeholder="Email" id="username" name="username" value="<?php echo isset($username) ? $username : '' ?>"/>
            <input type="password" placeholder="Пароль" id="password" name="password"/>
            <button type="submit" value="login">Войти</button>
            <p class="message">Не зарегистрированы? <a href="#" class="flipper">Регистрация</a></p>
            <input type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                   value="<?=Yii::$app->request->csrfToken?>"/>
            <input type="hidden" name="act" value="login" />
        </form>
    </div>
</div>