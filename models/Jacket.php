<?php

namespace app\models;

use app\components\ComponentsTrait;
use app\components\ManageableTrait;
use yii\db\ActiveRecord;

class Jacket extends ActiveRecord
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
                'model' => ['shirtCategory' => 'category'],
                'field' => 'category',
            ],
            'color' => [
                'type' => 'list',
                'model' => ['shirtColor' => 'color'],
                'field' => 'color',
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
                'model' => ['shirtCategory' => 'category'],
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
                'model' => ['shirtCategory' => 'category'],
            ],
            [
                'type' => 'list',
                'field' => 'color',
                'title' => 'Цвет',
                'model' => ['shirtColor' => 'color'],
            ],
        ];
    }

    public function getCountOptions()
    {
        return [
            'model' => ['shirtCount' => ['shirt_id', 'shirt_size_id']],
            'list' => ['model' => ['shirtSize' => 'name']],
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        $model= self::getJacketSizeModel();
        $query = $model::find();

        $query->where('1=1');

        $query->join('inner join', 'jacket_count', '.jacket_size.id = jacket_count.jacket_size_id');
        $query->andWhere('jacket_count.count > 0');
        $query->andWhere('jacket_count.jacket_id = ' . $this->id);

        return $query->all();
    }


    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update jacket_count set count=count-1 
where jacket_count.jacket_size_id = :i1 and jacket_count.jacket_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }
}
