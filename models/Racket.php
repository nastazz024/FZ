<?php

namespace app\models;

use yii\db\ActiveRecord;

class Racket extends ActiveRecord
{
    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update racket_count set count=count-1 
where racket_count.racket_size_id = :i1 and racket_count.racket_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }
}
