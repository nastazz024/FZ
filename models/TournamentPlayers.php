<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%t_tournament_players}}".
 *
 * @property int $id
 * @property int $tournament_id
 * @property int $player_id
 * @property string $class
 *
 * @property Player $player
 * @property Tournament $tournament
 */
class TournamentPlayers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t_tournament_players}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tournament_id', 'player_id', 'class'], 'required'],
            [['tournament_id', 'player_id'], 'integer'],
            [['class'], 'string', 'max' => 3],
            [['tournament_id', 'player_id', 'class'], 'unique', 'targetAttribute' => ['tournament_id', 'player_id', 'class']],
            [['tournament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tournament::className(), 'targetAttribute' => ['tournament_id' => 'id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['player_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tournament_id' => 'Tournament ID',
            'player_id' => 'Player ID',
            'class' => 'Class',
        ];
    }

    /**
     * Gets query for [[Player]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Player::className(), ['id' => 'player_id']);
    }

    /**
     * Gets query for [[Tournament]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTournament()
    {
        return $this->hasOne(Tournament::className(), ['id' => 'tournament_id']);
    }
}
