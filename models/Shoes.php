<?php

namespace app\models;

use app\components\ComponentsTrait;
use app\components\ManageableTrait;
use yii\db\ActiveRecord;

class Shoes extends ActiveRecord
{
    use ComponentsTrait;
    use ManageableTrait;


    public function getSearchFields()
    {
        return [
            'text' => [
                'type' => 'text',
                'fields' => ['name', 'description'],
            ],
            'cat' => [
                'type' => 'list',
                'model' => ['shoesCategory' => 'category'],
                'field' => 'category',
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
            [
                'field' => 'category',
                'title' => 'Категория',
                'model' => ['shoesCategory' => 'category'],
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
                'type' => 'list',
                'field' => 'category',
                'title' => 'Категория',
                'model' => ['shoesCategory' => 'category'],
            ],

        ];
    }

    public function getCountOptions()
    {
        return [
            'model' => ['shoesCount' => ['shoes_id', 'shoes_size_id']],
            'list' => ['model' => ['shoesSize' => 'name']],
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        $model= self::getShoesSizeModel();
        $query = $model::find();

        $query->where('1=1');

        $query->join('inner join', 'shoes_count', '.shoes_size.id = shoes_count.shoes_size_id');
        $query->andWhere('shoes_count.count > 0');
        $query->andWhere('shoes_count.shoes_id = ' . $this->id);

        return $query->all();
    }

    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update shoes_count set count=count-1 
where shoes_count.shoes_size_id = :i1 and shoes_count.shoes_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }

}
