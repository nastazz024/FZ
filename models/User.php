<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string $login
     * @return IdentityInterface|null
     */
    public static function findIdentityByLogin($login)
    {
        return static::findOne(['login' => $login, 'enabled' => 1]);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->password;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $this->hashAuthKey($authKey);
    }

    /**
     * @inheritdoc
     */
    public function setAttributes($values, $safeOnly = true)
    {
        unset($values['password']);
        return parent::setAttributes($values, $safeOnly);
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function hashAuthKey($authKey)
    {
        return md5($authKey);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required', 'message' => 'Заполните обязательные поля'],
            // the email attribute should be a valid email address
            ['email', 'email', 'message' => 'Ошибка в поле Email'],
        ];
    }
}
