<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;

class Shoes extends ActiveRecord
{
    use ComponentsTrait;

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        $model= self::getShoesSizeModel();
        $query = $model::find();

        $query->where('1=1');

        $query->join('inner join', 'shoes_count', '.shoes_size.id = shoes_count.shoes_size_id');
        $query->andWhere('shoes_count.count > 0');
        $query->andWhere('shoes_count.shoes_id = ' . $this->id);

        return $query->all();
    }

}
