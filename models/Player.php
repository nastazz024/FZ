<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%t_players}}".
 *
 * @property int $id
 * @property string $name
 * @property string $bdate
 * @property string $gender
 *
 * @property DrawPlayers[] $tDrawPlayers
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t_players}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'bdate'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['bdate', 'gender'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'bdate' => 'Дата Рождения',
            'gender' => 'Пол',
        ];
    }

    /**
     * Gets query for [[TDrawPlayers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrawPlayers()
    {
        return $this->hasMany(DrawPlayers::className(), ['player_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return PlayerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlayerQuery(get_called_class());
    }
}
