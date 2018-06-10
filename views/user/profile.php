<?php

if (!empty($message)) { ?>
    <h1><?php echo $message ?></h1>
<?php } ?>

<form method="post">
    <label for="name">name</label>
    <input id="name" name="name" value="<?php echo isset($post['name']) ? $post['name'] : $user->name ?>"/>
    <?php if (isset($errors['name'])) { ?>
        <b><?php echo implode('. ', $errors['name']) ?></b>
    <?php } ?>
    <br/>

    <label for="email">email</label>
    <input id="email" name="email" value="<?php echo isset($post['email']) ? $post['email'] : $user->email ?>"/>
    <?php if (isset($errors['email'])) { ?>
        <b><?php echo implode('. ', $errors['email']) ?></b>
    <?php } ?>
    <br/>

    <label for="phone">phone</label>
    <input id="phone" name="phone" value="<?php echo isset($post['phone']) ? $post['phone'] : $user->phone ?>"/>
    <?php if (isset($errors['phone'])) { ?>
        <b><?php echo implode('. ', $errors['phone']) ?></b>
    <?php } ?>
    <br/>


    <input type="submit" value="save" style="visibility: visible;"/>
    <input type="hidden" name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
    <input type="hidden" name="act" value="profile" />
</form>

<hr/>

<form method="post">
    <label for="current">current</label>
    <input id="current" name="current" type="password"/>
    <?php if (isset($errors['current'])) { ?>
        <b><?php echo implode('. ', $errors['current']) ?></b>
    <?php } ?>
    <br/>

    <label for="new">new</label>
    <input id="new" name="new" type="password"/>
    <br/>

    <label for="repeat">current</label>
    <input id="repeat" name="repeat" type="password"/>
    <?php if (isset($errors['repeat'])) { ?>
        <b><?php echo implode('. ', $errors['repeat']) ?></b>
    <?php } ?>
    <br/>


    <input type="submit" value="save" style="visibility: visible;"/>
    <input type="hidden" name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
    <input type="hidden" name="act" value="password" />
</form>