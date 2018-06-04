<?php

namespace app\components;

trait ComponentsTrait
{

    /**
     * @return \app\models\Shirt|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtModel()
    {
        return \yii::$app->get('shirt');
    }

    /**
     * @return \app\models\ShirtColor|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtColorModel()
    {
        return \yii::$app->get('shirtColor');
    }

    /**
     * @return \app\models\ShirtSize|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtSizeModel()
    {
        return \yii::$app->get('shirtSize');
    }

    /**
     * @return \app\models\Racket|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getRacketModel()
    {
        return \yii::$app->get('racket');
    }

    /**
     * @return \app\models\Racket|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShoesModel()
    {
        return \yii::$app->get('shoes');
    }


    /**
     * @return \app\models\ShirtCategory|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtCategoryModel()
    {
        return \yii::$app->get('shirtCategory');
    }

    /**
     * @return \app\models\ShirtCategory|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShoeCategoryModel()
    {
        return \yii::$app->get('shoeCategory');
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
     * @return \app\models\ShirtCategory[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShirtCategories()
    {
        $list = [];

        foreach (self::getShirtCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShirtCategory[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShoeCategories()
    {
        $list = [];

        foreach (self::getShoeCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }


    /**
     * @param array $ids
     * @return array
     */
    public static function sanitizeIds($ids)
    {
        if (!is_array($ids)) {
            return [];
        }

        array_walk($ids, function(&$v) {
            $v = (int)$v;
        });

        $ids = array_filter($ids);

        return $ids;
    }
}