<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;

class Shirt extends ActiveRecord
{
    use ComponentsTrait;
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        $model= self::getShirtSizeModel();
        $query = $model::find();

        $query->where('1=1');

        $query->join('inner join', 'shirt_count', '.shirt_size.id = shirt_count.shirt_size_id');
        $query->andWhere('shirt_count.count > 0');
        $query->andWhere('shirt_count.shirt_id = ' . $this->id);

        return $query->all();
    }

}
