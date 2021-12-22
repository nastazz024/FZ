<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%t_draw_players}}".
 *
 * @property int $id
 * @property int $draw_id
 * @property int $player_id
 *
 * @property Draws $draw
 * @property Player $player
 * @property DrawPlayersMatches[] $tDrawPlayersMatches
 * @property DrawPlayersMatches[] $tDrawPlayersMatches0
 */
class DrawPlayers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t_draw_players}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['draw_id', 'player_id'], 'required'],
            [['draw_id', 'player_id'], 'integer'],
            [['draw_id'], 'exist', 'skipOnError' => true, 'targetClass' => Draws::className(), 'targetAttribute' => ['draw_id' => 'id']],
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
            'draw_id' => 'Draw ID',
            'player_id' => 'Player ID',
        ];
    }

    /**
     * Gets query for [[Draw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDraw()
    {
        return $this->hasOne(Draws::className(), ['id' => 'draw_id']);
    }

    /**
     * Gets query for [[Player]].
     *
     * @return \yii\db\ActiveQuery|Player
     */
    public function getPlayer()
    {
        return $this->hasOne(Player::className(), ['id' => 'player_id']);
    }

    /**
     * Gets query for [[TDrawPlayersMatches]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTDrawPlayersMatches()
    {
        return $this->hasMany(DrawPlayersMatches::className(), ['draw_player1' => 'id']);
    }

    /**
     * Gets query for [[TDrawPlayersMatches0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTDrawPlayersMatches0()
    {
        return $this->hasMany(DrawPlayersMatches::className(), ['draw_player2' => 'id']);
    }
}
