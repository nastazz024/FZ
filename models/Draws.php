<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%t_draws}}".
 *
 * @property int $id
 * @property int $tournament_id
 * @property string $type
 * @property string $class
 * @property int $matches_count
 * @property int $completed
 * @property int $winners_count
 *
 * @property DrawPlayers[] $tDrawPlayers
 * @property Tournament $tournament
 */
class Draws extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t_draws}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tournament_id', 'type', 'class'], 'required'],
            [['tournament_id', 'matches_count', 'completed', 'winners_count'], 'integer'],
            [['type', 'class'], 'string'],
            [['tournament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tournament::className(), 'targetAttribute' => ['tournament_id' => 'id']],
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
            'type' => 'Type',
            'class' => 'Class',
            'matches_count' => 'Matches Count',
            'completed' => 'Completed',
            'winners_count' => 'Winners Count',
        ];
    }

    /**
     * Gets query for [[TDrawPlayers]].
     *
     * @return \yii\db\ActiveQuery|DrawPlayers[]
     */
    public function getDrawPlayers()
    {
        return $this->hasMany(DrawPlayers::className(), ['draw_id' => 'id']);
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

    /**
     * @param DrawPlayers $drPl1
     * @param DrawPlayers $drPl2
     * @return DrawPlayersMatches[]
     */
    public function getDrawPlayersMatches($drPl1, $drPl2)
    {
        return DrawPlayersMatches::find()->where([
            'draw_id' => $this->id,
            'draw_player1' => $drPl1->id,
            'draw_player2' => $drPl2->id,
        ])->orderBy('id')->all();
    }

    /**
     * @return DrawPlayersMatches[]
     */
    public function getAllPlayersMatches()
    {
        return DrawPlayersMatches::find()->where([
            'draw_id' => $this->id,
        ])->orderBy('id')->all();
    }


    /**
     * @param bool $onlyWinners
     * @return array
     */
    public function sortGroupPlayersByScore($onlyWinners = false)
    {
        if ($this->type !='group') {
            throw new \Exception('not group');
        }

        $extdraws = $this->getAllPlayersMatches();
        $extScores = $this->calcWinners($extdraws);

        if ($onlyWinners) {
            $buf = [];
            reset($extScores);
            for ($i = 1; $i <= $this->winners_count; $i++) {
                $buf[] = current($extScores);
                next($extScores);
            }
            return $buf;
        }

        return $extScores;
    }

    /**
     * @param array $drawMatches
     * @return array
     */
    protected function calcWinners(array $drawMatches)
    {
        /** @var DrawPlayers[] $drPlayers */
        $drPlayers = $this->getDrawPlayers()->all();

        $drPlayersIds = [];
        $playersIds = [];
        foreach ($drPlayers as $drPlayer) {
            $drPlayersIds[$drPlayer->id] = $drPlayer;
            $playersIds[$drPlayer->player_id] = $drPlayer->player;
        }

        $extScores = [];
        foreach ($drawMatches as $extdraw) {
            $id1 = $drPlayersIds[$extdraw->draw_player1]->player_id;
            $id2 = $drPlayersIds[$extdraw->draw_player2]->player_id;

            if (empty($extScores[$id1])) {
                $extScores[$id1] = [
                    'match_cnt' => 0,
                    'match_point' => 0,
                    'win_point' => 0,
                    'loose_point' => 0,
                ];
            }
            if (empty($extScores[$id2])) {
                $extScores[$id2] = [
                    'match_cnt' => 0,
                    'match_point' => 0,
                    'win_point' => 0,
                    'loose_point' => 0,
                ];
            }

            $extScores[$id1]['match_cnt']++;
            $extScores[$id2]['match_cnt']++;
            if ($extdraw->player1_score > $extdraw->player2_score) {
                $extScores[$id1]['match_point']++;
                $extScores[$id1]['win_point'] += $extdraw->player1_score;
                $extScores[$id2]['loose_point'] += $extdraw->player2_score;
            } elseif ($extdraw->player2_score > $extdraw->player1_score) {
                $extScores[$id2]['match_point']++;
                $extScores[$id2]['win_point'] += $extdraw->player2_score;
                $extScores[$id1]['loose_point'] += $extdraw->player1_score;
            } else {
                //
            }
        }

        uasort($extScores, function($a, $b) {
            if ($a['match_point'] == $b['match_point']) {
                if ($a['win_point'] == $b['win_point']) {
                    return $b['loose_point'] <=> $a['loose_point'];
                }
                return $b['win_point'] <=> $a['win_point'];
            }

            return $b['match_point'] <=> $a['match_point'];
        });

        foreach ($extScores as $id => &$extScore) {
            $extScore['player'] = $playersIds[$id];
        }
        unset($extScore);

        return $extScores;
    }


    /**
     * @return array
     * @throws \Exception
     */
    public function getOlympData()
    {
        if ($this->type !='olymp') {
            throw new \Exception('not olymp');
        }

        /** @var DrawPlayers[] $drPlayers */
        $drPlayers = $this->getDrawPlayers()->orderBy('id')->all();

        $drPlayerByPlayer = [];
        foreach ($drPlayers as $drPlayer) {
            $drPlayerByPlayer[$drPlayer->player_id] = $drPlayer;
        }

//        $drMatches = $this->getAllPlayersMatches();

        $roundCnt = ceil(log(count($drPlayers), 2));

        $data = [];

        for ($roundInd = 0; $roundInd < $roundCnt; $roundInd++) {
            $data[$roundInd] = [];
            $buf = [];

            $winners = [];
            for ($drPlInd = 0; $drPlInd < count($drPlayers); $drPlInd += 2) {
                $buf['dr_player1'] = $drPlayers[$drPlInd];
                $buf['dr_player2'] = null;

                if (isset($drPlayers[$drPlInd + 1])) {
                    $buf['dr_player2'] = $drPlayers[$drPlInd + 1];
                    $buf['matches'] = $this->getDrawPlayersMatches($buf['dr_player1'], $buf['dr_player2']);
                    $wins = $this->calcWinners($buf['matches']);
                    $buf['winner'] = reset($wins);

                } else {
//                    $buf['winner']['player'] = $buf['dr_player1']->getPlayer()->one();
//                    $buf['matches'] = [];
                }
                if (!empty($buf['winner'])) {
                    $winners[] = $drPlayerByPlayer[$buf['winner']['player']->id];
                }

                $data[$roundInd][] = $buf;
            }

            $drPlayers = $winners;
        }

        return $data;
    }
}
