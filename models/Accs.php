<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;

class Accs extends ActiveRecord
{

    public function decreaseSizeCount()
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update accs set count=count-1 
where id=:i1', ['i1' => $this->id])
            ->execute();
    }

}
