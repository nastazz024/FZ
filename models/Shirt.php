<?php

namespace app\models;

use app\components\ComponentsTrait;
use app\components\ManageableIntegface;
use app\components\ManageableTrait;
use yii\db\ActiveRecord;
use yii\db\Connection;

class Shirt extends ActiveRecord implements ManageableIntegface
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
     * @return \yii\db\ActiveRecord[]
     */
    public function getSizes()
    {
        $model= self::getShirtSizeModel();
        $query = $model::find();

//        $query->where('1=1');

        $query->join('inner join', 'shirt_count', '.shirt_size.id = shirt_count.shirt_size_id');
        $query->andWhere('shirt_count.count > 0');
        $query->andWhere('shirt_count.shirt_id = ' . $this->id);

        return $query->all();
    }

    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update shirt_count set count=count-1 
where shirt_count.shirt_size_id = :i1 and shirt_count.shirt_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }

}
