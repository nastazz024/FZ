<?php

use app\models\DrawPlayersMatches;
use yii\helpers\Html;

/** @var \app\models\Tournament $model */
/** @var \app\models\Draws[] $draws */


$occupiedClasses = [];
foreach ($draws as $draw) {
    $occupiedClasses[] = $draw->class;
}
$occupiedClasses = array_unique($occupiedClasses);

?>
<div class="tournament-players">
    <h1><a href="/admin/tournaments/view?id=<?= $model->id ?>"><?= $model->name ?></a></h1>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">

        <?php
        foreach ($occupiedClasses as $ci => $class) {
            $hasOlymp = $model->getOlympDrawByClass($class); ?>
            <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="h<?= $class ?>">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#c<?= $class ?>"
                           aria-expanded="false" aria-controls="c<?= $class ?>">
                            <?= $class ?>
                        </a>
                    </h4>
                </div>

                <div id="c<?= $class ?>" class="panel-collapse collapse <?= $ci === 0 ? 'in' : '' ?>" role="tabpanel"
                     aria-labelledby="h<?= $class ?>">
                    <div class="panel-body">

                        <?php


                        $classDraws = [];
                        foreach ($draws as $draw) {
                            if ($draw->class != $class) {
                                continue;
                            }
                            $classDraws[] = $draw;
                        }


                        if ($hasOlymp) { ?>
                            <div style="float: right;"><a
                                        href="/admin/tournament/draw-olymp?tid=<?= $model->id ?>&class=<?= $class ?>">Сетка</a>
                            </div>
                            <?php
                        } else {
                            $canOlymp = true;
                            foreach ($classDraws as $clDraw) {
                                $winners = $clDraw->sortGroupPlayersByScore();
                                $canOlymp &= count($winners) > 0;
                            }
                            $disabled = '';
                            if (!$canOlymp) {
                                $disabled = 'disabled="disabled"';
                            }
                            ?>


                            <form method='post' style="float: right;">
                                <input type='hidden' name='<?= Yii::$app->request->csrfParam ?>'
                                       value='<?= Yii::$app->request->csrfToken ?>'/>
                                <input type='hidden' name='act' value='create-olymp'/>
                                <input type='hidden' name='class' value='<?= $class ?>'/>
                                <input type='hidden' name='tid' value='<?= $model->id ?>'/>
                                <input type='submit' value='Создать сетку' class="btn btn-success" <?= $disabled ?>/>
                            </form>
                            <?php
                        } ?>
                        <?php


                        $i = 0;
                        $grDic = 'ABCDEFGHJKLMNOPQRST';

                        foreach ($classDraws as $clDraw) {
                            $winners = $clDraw->sortGroupPlayersByScore();
//            echo '<pre>'; print_r($winners); echo '</pre>'; //exit;
                            $extScores = [];
                            /** @var DrawPlayersMatches[] $extdraws */
                            $extdraws = DrawPlayersMatches::find()->where([
                                'draw_id' => $clDraw->id,
                            ])->orderBy('id')->all();
                            foreach ($extdraws as $extdraw) {
                                $extScores[$extdraw->draw_player1][$extdraw->draw_player2][] = $extdraw->player1_score;
                                $extScores[$extdraw->draw_player2][$extdraw->draw_player1][] = $extdraw->player2_score;
                            }
//            echo '<pre>'; print_r($extScores); echo '</pre>';
                            $grName = $grDic[$i] ?? '';
                            ?>
                            <h3>Группа <?= $grName ?></h3></br>
                            <?php
                            /** @var \app\models\DrawPlayers[] $pls */
                            $pls = $clDraw->getDrawPlayers()->all();
                            $drPls = [];
                            ?>

                            <form method='post'>
                                <input type='hidden' name='<?= Yii::$app->request->csrfParam ?>'
                                       value='<?= Yii::$app->request->csrfToken ?>'/>
                                <input type='hidden' name='act' value='draw-score-save'/>
                                <input type='hidden' name='tid' value='<?= $model->id ?>'/>
                                <input type='hidden' name='did' value='<?= $clDraw->id ?>'/>
                                <table class='draw-score' style="float: left; display: inline-block;">
                                    <tr>
                                        <th></th>

                                        <?php
                                        foreach ($pls as $pl) {
                                            /** @var \app\models\Player $buf */
                                            $buf = $pl->getPlayer()->one();
                                            if (!$buf) {
                                                continue;
                                            }
//                        echo $buf->id . ' - ';
                                            echo "<th>" . $buf->name . '</th>';
                                            $drPls[$pl->id] = $buf;
                                        }
                                        echo "</tr>";


                                        $pass = [];
                                        $last = end($drPls);
                                        foreach ($drPls as $drPlId1 => $pl1) {
                                            if ($pl1 == $last) {
                                                continue;
                                            }
                                            echo "<tr>";
                                            echo "<th>" . $pl1->name . '</th>';
                                            foreach ($drPls as $drPlId2 => $pl2) {
                                                echo "<td>";
                                                if ($drPlId1 == $drPlId2) {
                                                    continue;
                                                }
                                                if (isset($pass[$drPlId1 . '-' . $drPlId2])) {
                                                    continue;
                                                }
                                                $dis = $hasOlymp || $clDraw->completed ? ' disabled="disabled"' : '';
                                                for ($z = 0; $z < $clDraw->matches_count; $z++) {
                                                    echo "<input class='score' type='number' size=1 min=0 max=30 name='nscore[" . $drPlId1 . "][" . $drPlId2 . "][" . $z . "]' value='" . ($extScores[$drPlId1][$drPlId2][$z] ?? '') . "'" . $dis . ">
                        / <input class='score' type='number' size=1 min=0 max=30 name='nscore[" . $drPlId2 . "][" . $drPlId1 . "][" . $z . "]' value='" . ($extScores[$drPlId2][$drPlId1][$z] ?? '') . "'" . $dis . "><br/>";
                                                }
                                                $pass[$drPlId1 . '-' . $drPlId2] = 1;
                                                $pass[$drPlId2 . '-' . $drPlId1] = 1;
                                                echo "</td>";
                                            }
                                            echo "</tr>";
                                        }

                                        echo "</table>";

                                        ?>
                                        <div class="" style="float: left; margin-left: 20px;">
                                            <b>Победители: <br/></b>
                                            <?php
                                            //                        echo '<pre>'; print_r($winners); echo '</pre>';
                                            $x = 1;
                                            foreach ($winners as $winner) {
                                                if (!$winner || !$winner['player']) {
                                                    continue;
                                                }
                                                echo $winner['player']->name;
                                                if ($x == $clDraw->winners_count) {
                                                    echo '<hr/>';
                                                } else {
                                                    echo '<br/>';
                                                }
                                                $x++;
                                            }

                                            ?>
                                        </div>
                                        <div class="clear"></div>

                                        <input type="submit" value="Сохранить счёт" class="btn btn-success"/>

                            </form>


                            <?php
                            $i++;
                            echo '</br></br><div class="clear"></div>';
                        }

                        ?>
                    </div>
                </div>
            </div>

            <?php
        }

        ?>

    </div>
</div>
