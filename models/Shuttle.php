<?php

namespace app\models;

use yii\db\ActiveRecord;

class Shuttle extends ActiveRecord
{
    public function decreaseSizeCount()
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update shuttle set count=count-1 
where id=:i1', ['i1' => $this->id])
            ->execute();
    }
}
