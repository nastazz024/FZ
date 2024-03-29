<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;

class Short extends ActiveRecord
{
    use ComponentsTrait;
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        $model= self::getShortSizeModel();
        $query = $model::find();

        $query->where('1=1');

        $query->join('inner join', 'short_count', '.short_size.id = short_count.short_size_id');
        $query->andWhere('short_count.count > 0');
        $query->andWhere('short_count.short_id = ' . $this->id);

        return $query->all();
    }

    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update short_count set count=count-1 
where short_count.short_size_id = :i1 and short_count.short_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }
}
