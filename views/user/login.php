<?php


if (!empty($message)) { ?>
    <h1><?php echo $message ?></h1>
<?php } ?>
<form method="post">
    <label for="username">username</label>
    <input id="username" name="username" value="<?php echo isset($username) ? $username : '' ?>"/>
    <br/>
    <label for="password">password</label>
    <input id="password" name="password" type="password"/>

    <br/>

    <input type="submit" value="login" style="visibility: visible;"/>
    <input type="hidden" name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
</form>