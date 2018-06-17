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

    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update shoes_count set count=count-1 
where shoes_count.shoes_size_id = :i1 and shoes_count.shoes_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }

}
