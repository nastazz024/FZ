<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;

class Jacket extends ActiveRecord
{
    use ComponentsTrait;
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        $model= self::getJacketSizeModel();
        $query = $model::find();

        $query->where('1=1');

        $query->join('inner join', 'jacket_count', '.jacket_size.id = jacket_count.jacket_size_id');
        $query->andWhere('jacket_count.count > 0');
        $query->andWhere('jacket_count.jacket_id = ' . $this->id);

        return $query->all();
    }

}
