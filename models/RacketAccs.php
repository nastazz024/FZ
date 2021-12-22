<?php

namespace app\models;

use app\components\ComponentsTrait;
use yii\db\ActiveRecord;

class RacketAccs extends ActiveRecord
{

    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update racket_accs set count=count-1 
where id=:i1', ['i1' => $this->id])
            ->execute();
    }

}
