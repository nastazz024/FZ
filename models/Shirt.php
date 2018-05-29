<?php

namespace app\models;

use yii\db\ActiveRecord;

class Shirt extends ActiveRecord
{
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        // todo get records with count > 0
        return $this->hasMany(ShirtCount::class, ['shirt_id' => 'id']);
    }
}
