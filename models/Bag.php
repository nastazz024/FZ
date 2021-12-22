<?php

namespace app\models;

use app\components\ComponentsTrait;
use app\components\ManageableTrait;
use yii\db\ActiveRecord;

class Bag extends ActiveRecord
{
    use ManageableTrait;

    public function getSearchFields()
    {
        return [
            'text' => [
                'type' => 'text',
                'fields' => ['name', 'description'],
            ]
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
            ]

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
            ]
        ];
    }

    public function getCountOptions()
    {
        return [
            'model' => ['bagCount' => ['bag_id', 'bag_size_id']],
            'list' => ['model' => ['bagSize' => 'name']],
        ];
    }

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
