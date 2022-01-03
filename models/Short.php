<?php

namespace app\models;

use app\components\ComponentsTrait;
use app\components\ManageableTrait;
use yii\db\ActiveRecord;

class Short extends ActiveRecord
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
                'model' => ['shortCategory' => 'category'],
                'field' => 'category',
            ],
            'color' => [
                'type' => 'list',
                'model' => ['shortColor' => 'color'],
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
                'model' => ['shortCategory' => 'category'],
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
                'model' => ['shortCategory' => 'category'],
            ],
            [
                'type' => 'list',
                'field' => 'color',
                'title' => 'Цвет',
                'model' => ['shortColor' => 'color'],
            ],
        ];
    }

    public function getCountOptions()
    {
        return [
            'model' => ['shortCount' => ['short_id', 'short_size_id']],
            'list' => ['model' => ['shortSize' => 'name']],
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        $model= self::getShortSizeModel();
        $query = $model::find();

        $query->where('1=1');

        $query->join('inner join', 'short_count', '.short_size.id = short_count.short_size_id');
        $query->andWhere('short_count.count > 0');
        $query->andWhere('short_count.short_id = ' . $this->id);

        return $query->all();
    }

    /**
     * @param int $id
     */
    public function decreaseSizeCount($id)
    {
        /** @var Connection $db */
        $db = \Yii::$app->db;

        $db->createCommand('update short_count set count=count-1 
where short_count.short_size_id = :i1 and short_count.short_id=:i2', ['i1' => $id, 'i2' => $this->id])
            ->execute();
    }
}
