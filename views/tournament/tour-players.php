<?php

use app\models\Draws;
use yii\helpers\Html;

/** @var \app\models\Tournament $model */
/** @var \app\models\Player[] $players */
/** @var \app\models\TournamentPlayers[] $currentPlayers */
/** @var \app\models\Draws[] $draws */

$occupiedClasses = [];
foreach ($draws as $draw) {
    $occupiedClasses[] = $draw->class;
}
$occupiedClasses = array_unique($occupiedClasses);

?>
<div class="tournament-players">
    <h1><a href="/admin/tournaments/view?id=<?= $model->id ?>"><?= $model->name ?></a></h1>

    <div>
        Add<br/>
        <form method="post">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
                   value="<?= Yii::$app->request->csrfToken ?>"/>
            <input type="hidden" name="act" value="add"/>
            <select name="pid">
                <?php
                $playerNames = [];
                foreach ($players as $player) {
                    $playerNames[$player->id] = $player->name;
                    echo "<option value='{$player->id}'>" . htmlentities($player->name);
                }
                ?>
            </select>
            &nbsp;
            <?php
            $classes = explode(',', $model->classes);
            sort($classes);
            ?>
            <select name="class">
                <?php
                foreach ($classes as $class) {
                    if (in_array($class, $occupiedClasses)) {
                        continue;
                    }
                    echo "<option value='{$class}'>" . htmlentities($class);
                }
                ?>
            </select>
            &nbsp;
            <input type="submit" value="Создать" class="btn btn-success">
        </form>
    </div>
    <hr/>

    <?php
    foreach ($classes as $class) {
        ?>
        <div class='tour_players t_big'>
            <h2><?= $class ?></h2>
            <?php

            foreach ($currentPlayers as $cPlayer) {
                if ($cPlayer->class != $class) {
                    continue;
                }
                $disabled = in_array($class, $occupiedClasses);
                ?>
                <div>
                    <form class='fbtn' method='post'>
                        <input type='submit' value='Удалить' " <?= ($disabled ? 'disabled="disabled"' : '') ?>
                        class="btn
                        btn-danger" />
                        <input type='hidden' name='<?= Yii::$app->request->csrfParam ?> '
                               value='<?= Yii::$app->request->csrfToken ?>'/>
                        <input type='hidden' name='act' value='remove'/>
                        <input type='hidden' name='id' value='<?= $cPlayer->id ?>'/>
                    </form>
                    &nbsp;
                    <?= $playerNames[$cPlayer->player_id] ?>
                </div>
                <?php
            }
            ?>

        </div>

        <?php
        $olymp = false;
        ?>
        <div class='tour_draws'>

            <?php
            if (in_array($class, $occupiedClasses)) {
                $draws = Draws::findAll([
                    'tournament_id' => $model->id,
                    'class' => $class,
                ]);
                $disabled = false;
                foreach ($draws as $draw) {
                    if (count($draw->getAllPlayersMatches())) {
                        $disabled = true;
                        break;
                    }
                }

                if (count($draws) == 1 && current($draws)->type == 'olymp') {
                    $olymp = true;
                }


                ?>
                <form method='post' class="tbtn" style="float: right; margin: 20px 0;">
                    <input type='hidden' name='<?= Yii::$app->request->csrfParam ?>'
                           value='<?= Yii::$app->request->csrfToken ?>'/>
                    <input type='hidden' name='act' value='draw-remove'/>
                    <input type='hidden' name='class' value='<?= $class ?>'/>
                    <input type='hidden' name='tid' value='<?= $model->id ?>'/>
                    <?php
                    if (!$disabled) { ?>
                        <input type='submit' value='Удалить' class="btn btn-danger"
                            <?= ($disabled ? 'disabled="disabled"' : '') ?> />
                        &nbsp;
                        &nbsp;
                        <?php
                    }
                    ?>
                    <?php
                    if ($olymp) { ?>
                        <a href="/admin/tournament/draw-olymp?tid=<?= $model->id ?>&class=<?= $class ?>"
                           target="_blank">счёт</a>
                        <?php
                    } else { ?>
                        <a href="/admin/tournament/draws?tid=<?= $model->id ?>#<?= $class ?>" target="_blank">счёт</a>
                    <?php
                    } ?>
                </form>

                <?php
            } else {
                echo '&nbsp;';
            } ?>

            <div>
                <?php
                $classDraws = [];
                foreach ($draws as $draw) {
                    if ($draw->class != $class) {
                        continue;
                    }
                    $classDraws[] = $draw;
                }
                ?>
                <?php
                if (!count($classDraws)) { ?>
                    <form method='post'>
                        <input type='hidden' name='<?= Yii::$app->request->csrfParam ?>'
                               value='<?= Yii::$app->request->csrfToken ?>'/>
                        <input type='hidden' name='act' value='draw-add'/>
                        <input type='hidden' name='class' value='<?= $class ?>'/>
                        <input type='hidden' name='tid' value='<?= $model->id ?>'/>
                        Введите кол-во групп <input name="cnt" size="1"> <input type='submit' value='Создать'/>
                        &nbsp;или&nbsp;
                        <input type='submit' value='создать сетку'
                               onclick="$(this).parent().find([name=act]).val('draw-add-olymp');"/>
                    </form>
                    <?php
                } else {
                    $i = 0;
                    $grDic = 'ABCDEFGHJKLMNOPQRST';
                    foreach ($classDraws as $clDraw) {
                        ?>
                        <div class="tour_players">
                            <?php
                            if ($olymp) {
                                echo '<b>Сетка</b></br>';
                            } else {
                                echo '<b>Группа ' . ($grDic[$i] ?? '') . '</b></br>';
                            }
                            $pls = $clDraw->getDrawPlayers()->all();
                            foreach ($pls as $pl) {
                                $buf = $pl->getPlayer()->one();
                                echo $buf->name . '</br>';
                            }
                            $i++;
                            ?>
                        </div>
                        <div class='clear'></div>
                        <?php
                    }
                } ?>
            </div>
        </div>
        <div class='clear'></div>
        <hr/>
        <?php
    }

    ?>

</div>
