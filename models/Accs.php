<?php

namespace app\models;

use app\components\ComponentsTrait;
use app\components\ManageableTrait;
use yii\db\ActiveRecord;

class Accs extends ActiveRecord
{

    use ManageableTrait;

    public function getSearchFields()
    {
        return [
            'text' => [
                'type' => 'text',
                'fields' => ['name', 'description'],
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
            [
                'field' => 'price',
                'title' => 'Цена',
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
            [
                'field' => 'count',
                'title' => 'Количество',
            ],

        ];
    }


    public function decreaseSizeCount()
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update accs set count=count-1 
where id=:i1', ['i1' => $this->id])
            ->execute();
    }

}
