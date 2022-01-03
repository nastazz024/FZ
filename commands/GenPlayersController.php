<?php

namespace app\commands;

use app\components\GenTrait;
use app\models\Player;
use yii\console\Controller;
use yii\console\ExitCode;


class GenPlayersController extends Controller
{
    use GenTrait;

    /**
     * @param int $cnt
     */
    public function actionIndex($cnt = 10)
    {
        for ($i = 0; $i < (int)$cnt; $i++) {
            $m = new Player();
//            $m->name = $this->getWords(mt_rand(1, 3), 3, 10);
            $m->name = $this->getCyrillicName(2);
            $dt = new \DateTime();
            $dt->setDate(mt_rand(1900, 2010), mt_rand(1, 12),  mt_rand(1, 31));
            $m->bdate = $dt->format('Y-m-d');
            $name = explode(' ', $m->name);
            $m->gender = mb_substr($name[0], -1) == 'а' ? 'w' : 'm';
            $m->save();

            echo '.';
        }
        echo "\ndone\n";
    }
}
