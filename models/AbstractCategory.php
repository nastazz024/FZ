<?php
namespace app\models;

use yii\db\ActiveRecord;

class AbstractCategory extends ActiveRecord
{
    const KIND_MAN = 1;
    const KIND_WOMAN = 2;
    const KIND_KIDS = 3;

    public static function getCategoryId($name)
    {
        if (empty($name)) {
            return 0;
        }
        if (defined(__CLASS__ . '::KIND_' . strtoupper($name))) {
            return constant(__CLASS__ . '::KIND_' . strtoupper($name));
        }
        return 0;
    }
}
