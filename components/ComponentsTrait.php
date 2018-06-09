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

    public static function getShuttleModel()
    {
        return \yii::$app->get('shuttle');
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
     * @return \app\models\RacketHole|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getRacketHoleModel()
    {
        return \yii::$app->get('racketHole');
    }

    /**
     * @return \app\models\RacketBalance|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getRacketBalanceModel()
    {
        return \yii::$app->get('racketBalance');
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
     * @return \app\models\ShoesSize|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShoesSizeModel()
    {
        return \yii::$app->get('shoesSize');
    }

    /**
     * @return \app\models\ShuttleSize|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShuttleSizeModel()
    {
        return \yii::$app->get('shuttleSize');
    }

    /**
     * @return \app\models\ShoesCategory|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShoesCategoryModel()
    {
        return \yii::$app->get('shoesCategory');
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
     * @return \app\models\BagSize|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getBagSizeModel()
    {
        return \yii::$app->get('bagSize');
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
    public static function getShirtColors()
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
    public static function getShirtSizes()
    {
        $list = [];

        foreach (self::getShirtSizeModel()->find()->orderBy('norder')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    public static function getShuttleSizes()
    {
        $list = [];

        foreach (self::getShuttleSizeModel()->find()->orderBy('norder')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShoesSize[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getShoesSizes()
    {
        $list = [];

        foreach (self::getShoesSizeModel()->find()->orderBy('norder')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShirtSize[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getJacketSizes()
    {
        $list = [];

        foreach (self::getJacketSizeModel()->find()->orderBy('norder')->all() as $item) {
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

    public static function getShoesCategories()
    {
        $list = [];

        foreach (self::getShoesCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\ShirtCategory[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getCategorie()
    {
        $list = [];

        foreach (self::getShoesCategoryModel()->find()->orderBy('category')->all() as $item) {
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






    /**
     * @return \app\models\Jacket|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getJacketModel()
    {
        return \yii::$app->get('jacket');
    }

    /**
     * @return \app\models\JacketColor|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getJacketColorModel()
    {
        return \yii::$app->get('jacketColor');
    }



    /**
     * @return \app\models\JacketSize|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getJacketSizeModel()
    {
        return \yii::$app->get('jacketSize');
    }


    /**
     * @return \app\models\ShirtCategory|object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getJacketCategoryModel()
    {
        return \yii::$app->get('jacketCategory');
    }

    /**
     * @return \app\models\ShirtColor[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getJacketColors()
    {
        $list = [];

        foreach (self::getJacketColorModel()->find()->orderBy('color')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\RacketHole[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getRacketHole()
    {
        $list = [];

        foreach (self::getRacketHoleModel()->find()->orderBy('hole')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\RacketBalance[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getRacketBalance()
    {
        $list = [];

        foreach (self::getRacketBalanceModel()->find()->orderBy('balance')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }

    /**
     * @return \app\models\JacketCategory[]
     * @throws \yii\base\InvalidConfigException
     */
    public static function getJacketCategories()
    {
        $list = [];

        foreach (self::getJacketCategoryModel()->find()->orderBy('category')->all() as $item) {
            $list[$item->id] = $item;
        }

        return $list;
    }



}