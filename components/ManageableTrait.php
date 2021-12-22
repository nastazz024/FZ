<?php

namespace app\components;

use yii\db\ActiveRecord;
use yii\db\Expression;

trait ManageableTrait
{
    /**
     * @return array
     */
    public function getSearchFields()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getShowFields()
    {
        return [];
    }


    /**
     * @return array
     */
    public function getEditFields()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getCountOptions()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getSearchListOptions(array $fieldParams)
    {
        /** @var ActiveRecord $model */
        $model = \yii::$app->get(key($fieldParams['model']));
        $query = $model::find();

        if ($model->hasAttribute('norder')) {
            $query->orderBy('norder');
        } else {
            $query->orderBy(current($fieldParams['model']));
        }
        $data = [];

        foreach ($query->all() as $row) {
            $data[$row->id] = $row->{current($fieldParams['model'])};
        }

        return $data;
    }

    /**
     * @return array
     */
    public function getCounts(array $fieldParams, $id)
    {
        /** @var ActiveRecord $model */
        $model = \yii::$app->get(key($fieldParams['model']));


        $query = $model::find();

        $query->andWhere([current($fieldParams['model'])[0] => $id]);
        $data = [];

        foreach ($query->all() as $row) {
            $data[$row->{current($fieldParams['model'])[1]}] = $row->count;
        }

        return $data;
    }

    /**
     * @return false|string
     */
    public function hasImageField()
    {
        foreach ($this->getEditFields() as $params) {
            if (($params['type'] ?? '') == 'image') {
                return $params['field'];
            }
        }
        return false;
    }

    /**
     * @param array $filter
     * @param string $orderBy
     * @return ActiveRecord[]
     */
    public function query(array $filter, $orderBy = '')
    {
        $query = $this::find()
            ->orderBy($orderBy)
            ->limit(10)
        ;

        foreach ($this->getSearchFields() as $key => $params) {
            if (empty($filter[$key])) {
                continue;
            }

            switch ($params['type']) {
                case 'text':
                    $b = [];
                    $s = \Yii::$app->db->quoteValue('%' . $filter[$key] . '%');
                    foreach ($params['fields'] as $f) {
                        $b[] = "{$f} like {$s}";
                    }

                    $query->andWhere(new Expression(implode(' or ', $b)));
                    break;

                default:
                    $query->andWhere($params['field'] . '=' . \Yii::$app->db->quoteValue($filter[$key]));
            }

        }

        return $query->all();
    }

}