<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;

class Bag extends ActiveRecord
{
    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update bag_count set count=count-1 
where bag_count.bag_size_id = :i1 and bag_count.bag_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }

}
