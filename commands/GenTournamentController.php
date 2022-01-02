<?php

namespace app\commands;

use app\components\GenTrait;
use app\models\Player;
use app\models\Tournament;
use app\models\TournamentPlayers;
use yii\console\Controller;
use yii\console\ExitCode;


class GenTournamentController extends Controller
{
    use GenTrait;

    /**
     */
    public function actionIndex()
    {
        $t = new Tournament();
        $t->name = 'Турнир №' . mt_rand(1, 99999);

        $dt = new \DateTime();
        $dt->setDate(mt_rand(2010, date('Y')), mt_rand(1, 12), mt_rand(1, 31));
        $t->date_start = $dt->format('Y-m-d');

        $dt->modify('+ ' . mt_rand(1, 5) . ' days');
        $t->date_end = $dt->format('Y-m-d');

        $classes = ['SD', 'SC', 'SB', 'DD', 'DC', 'DB', 'XC', 'WS', 'MS', 'XB', 'XD'];

        $c = mt_rand(0, count($classes) - 3);
        for ($i = 0; $i < $c; $i++) {
            unset($classes[mt_rand(0, count($classes) - 1)]);
            $classes = array_values($classes);
        }

        $t->classes = implode(',', $classes);

        $v = $t->save();

        if (!$v) {
            print_r($t->getErrors());
        } else {
            echo "\n" . $t->id;
        }
        echo "\ndone\n";
    }

    public function actionPlayers($tid, $cnt = 20)
    {
        $t = Tournament::findOne($tid);
        $players = Player::find()->all();
        $plCnr = count($players);

        $classes = explode(',', $t->classes);
        $clCnt = count($classes);
        for ($i = 0; $i < $cnt; $i++) {
            $tp = new TournamentPlayers();
            $tp->tournament_id = $t->id;
            $tp->player_id = $players[mt_rand(0, $plCnr - 1)]->id;
            $tp->class = $classes[mt_rand(0, $clCnt - 1)];
            $tp->save();
            echo '.';
        }
        echo "\ndone\n";
    }
}
