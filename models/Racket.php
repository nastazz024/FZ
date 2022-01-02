<?php

namespace app\models;

use app\components\ManageableTrait;
use yii\db\ActiveRecord;

class Racket extends ActiveRecord
{
    use ManageableTrait;


    public function getSearchFields()
    {
        return [
            'text' => [
                'type' => 'text',
                'fields' => ['name', 'description', 'full_description'],
            ],
            'hole' => [
                'type' => 'list',
                'model' => ['racketHole' => 'hole'],
                'field' => 'hole_id',
            ],
        ];
    }

    public function getShowFields()
    {
        return [
            [
                'field' => 'image',
                'type' => 'image',
            ],
            [
                'field' => 'name',
                'title' => 'Название',
                'sortable' => true,
            ],
        ];
    }

    public function getEditFields()
    {
        return [
            [
                'field' => 'name',
                'title' => 'Название',
            ],
            [
                'field' => 'description',
                'title' => 'Описание',
                'type' => 'text',
            ],
            [
                'field' => 'full_description',
                'title' => 'Полное описание',
                'type' => 'text',
            ],
            [
                'field' => 'image',
                'title' => 'Картинка',
                'type' => 'image',
            ],
            [
                'field' => 'price',
                'title' => 'Цена',
            ],
        ];
    }

    public function getCountOptions()
    {
        return [
            'model' => ['racketCount' => ['racket_id', 'racket_balance_id']],
            'list' => ['model' => ['racketBalance' => 'balance']],
        ];
    }


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
