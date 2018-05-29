<?php

namespace app\components;

trait ComponentsTrait
{

    /**
     * @return \app\models\Shirt
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtModel()
    {
        return \yii::$app->get('shirt');
    }

    /**
     * @return \app\models\ProductColor
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtColorModel()
    {
        return \yii::$app->get('shirtColor');
    }

    /**
     * @return \app\models\ShirtSize
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtSizeModel()
    {
        return \yii::$app->get('shirtSize');
    }

    /**
     * @return \app\models\ProductCategory
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtCategoryModel()
    {
        return \yii::$app->get('shirtCategory');
    }

    /**
     * @return \app\models\ShirtColor[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getColors()
    {
        $list = [];

        foreach (self::getShirtColorModel()->find()->orderBy('color')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShirtSize[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getSizes()
    {
        $list = [];

        foreach (self::getShirtSizeModel()->find()->orderBy('norder')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ProductCategory[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getCategories()
    {
        $list = [];

        foreach (self::getShirtCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

}