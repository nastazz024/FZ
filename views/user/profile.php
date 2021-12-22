<?php

$this->registerCssFile('@web/css/style.css');

if (!empty($message)) { ?>
    <h1><?php echo $message ?></h1>
<?php } ?>
<p class="profile">Профиль</p>
<form class="form3" method="post">
    <label for="name" class="label2">Имя</label>
    <input id="name" name="name" class="input2" value="<?php echo isset($post['name']) ? $post['name'] : $user->name ?>"/>
    <?php if (isset($errors['name'])) { ?>
        <b><?php echo implode('. ', $errors['name']) ?></b>
    <?php } ?>
    <br/><br>

    <label for="email" class="label2">Email</label>
    <input id="email" class="input2"  name="email" value="<?php echo isset($post['email']) ? $post['email'] : $user->email ?>"/>
    <?php if (isset($errors['email'])) { ?>
        <b><?php echo implode('. ', $errors['email']) ?></b>
    <?php } ?>
    <br/><br>

    <label for="phone" class="label2">Телефон</label>
    <input id="phone" class="input2"  name="phone" value="<?php echo isset($post['phone']) ? $post['phone'] : $user->phone ?>"/>
    <?php if (isset($errors['phone'])) { ?>
        <b><?php echo implode('. ', $errors['phone']) ?></b>
    <?php } ?>
    <br/><br>


    <input type="submit" class="input2"  value="Сохранить" style="visibility: visible;"/>
    <input type="hidden" class="input2"  name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
    <input type="hidden" name="act" value="profile" class="input2" />
</form>
<br/><br/>
<hr/>

<p class="profile1">Восстановление пароля</p>
<form method="post" class="form2 form3">
    <label for="current" class="label2">Старый пароль</label>
    <input id="current" class="input2"  name="current" type="password"/>
    <?php if (isset($errors['current'])) { ?>
        <b><?php echo implode('. ', $errors['current']) ?></b>
    <?php } ?>
    <br/><br/>

    <label for="new" class="label2" >Новый пароль</label>
    <input id="new" name="new" class="input2"  type="password"/>
    <br/><br/>

    <label for="repeat" class="label2">Подтвердите новый пароль</label>
    <input id="repeat" name="repeat" type="password" class="input2"/>
    <?php if (isset($errors['repeat'])) { ?>
        <b><?php echo implode('. ', $errors['repeat']) ?></b>
    <?php } ?>
    <br/><br/>


    <input type="submit" class="input2"  value="Сохранить" style="visibility: visible;"/>
    <input type="hidden" class="input2"  name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
    <input type="hidden" class="input2"  name="act" value="password" />
</form>

<?php

if ($user->is_admin) {
?>
    <br/><br/>
    <hr/>
    <br/><br/>
<p class="profile"><a href="/admin">ADMIN</a></p>
    <br/><br/>

    <?php
}
