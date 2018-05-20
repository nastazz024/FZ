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
    public static function getProductColorModel()
    {
        return \yii::$app->get('productColor');
    }

    /**
     * @return \app\models\ProductCategory
     * @throws \yii\base\InvalidConfigException
     */
    public static function getProductCategoryModel()
    {
        return \yii::$app->get('productCategory');
    }

    /**
     * @return \app\models\ProductColor[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getColors()
    {
        $list = [];

        foreach (self::getProductColorModel()->find()->orderBy('color')->all() as $item) {
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

        foreach (self::getProductCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

}