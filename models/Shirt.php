<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;
use yii\db\Connection;

class Shirt extends ActiveRecord
{
    use ComponentsTrait;

    /**
     * @return \yii\db\ActiveRecord[]
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

    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update shirt_count set count=count-1 
where shirt_count.shirt_size_id = :i1 and shirt_count.shirt_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }

}
