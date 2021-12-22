<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%t_draw_players_matches}}".
 *
 * @property int $id
 * @property int $draw_id
 * @property int $draw_player1
 * @property int $draw_player2
 * @property int $player1_score
 * @property int $player2_score
 *
 * @property Draws $draw
 * @property DrawPlayers $drawPlayer1
 * @property DrawPlayers $drawPlayer2
 */
class DrawPlayersMatches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t_draw_players_matches}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['draw_id', 'draw_player1', 'draw_player2', 'player1_score', 'player2_score'], 'required'],
            [['draw_id', 'draw_player1', 'draw_player2', 'player1_score', 'player2_score'], 'integer'],
            [['draw_player1'], 'exist', 'skipOnError' => true, 'targetClass' => DrawPlayers::className(), 'targetAttribute' => ['draw_player1' => 'id']],
            [['draw_player2'], 'exist', 'skipOnError' => true, 'targetClass' => DrawPlayers::className(), 'targetAttribute' => ['draw_player2' => 'id']],
            [['draw_id'], 'exist', 'skipOnError' => true, 'targetClass' => Draws::className(), 'targetAttribute' => ['draw_id' => 'id']],
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
            'draw_player1' => 'Draw Player1',
            'draw_player2' => 'Draw Player2',
            'player1_score' => 'Player1 Score',
            'player2_score' => 'Player2 Score',
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
     * Gets query for [[DrawPlayer1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrawPlayer1()
    {
        return $this->hasOne(DrawPlayers::className(), ['id' => 'draw_player1']);
    }

    /**
     * Gets query for [[DrawPlayer2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrawPlayer2()
    {
        return $this->hasOne(DrawPlayers::className(), ['id' => 'draw_player2']);
    }
}
