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
     * @return \app\models\Shoes|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShoesModel()
    {
        return \yii::$app->get('shoes');
    }

    /**
     * @return \app\models\Shuttle|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShuttleModel()
    {
        return \yii::$app->get('shuttle');
    }

    /**
     * @return \app\models\Bag|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getBagModel()
    {
        return \yii::$app->get('bag');
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
    public static function getCategories()
    {
        $list = [];

        foreach (self::getShirtCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }























    /**
     * @return \app\models\Short|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShortModel()
    {
        return \yii::$app->get('short');
    }

    /**
     * @return \app\models\ShortColor|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShortColorModel()
    {
        return \yii::$app->get('shortColor');
    }

    /**
     * @return \app\models\ShortSize|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShortSizeModel()
    {
        return \yii::$app->get('shortSize');
    }


    /**
     * @return \app\models\ShortCategory|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShortCategoryModel()
    {
        return \yii::$app->get('shortCategory');
    }

    /**
     * @return \app\models\ShortColor[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getColor()
    {
        $list = [];

        foreach (self::getShortColorModel()->find()->orderBy('color')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShortSize[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getSize()
    {
        $list = [];

        foreach (self::getShortSizeModel()->find()->orderBy('norder')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShirtCategory[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShortCategories()
    {
        $list = [];

        foreach (self::getShortCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShortCategory[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getCategory()
    {
        $list = [];

        foreach (self::getShortCategoryModel()->find()->orderBy('category')->all() as $item) {
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