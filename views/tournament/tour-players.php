<?php

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
        <input type="hidden" name="act"
               value="add"/>
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
        <input type="submit" value="+">
    </form>
</div>
    <hr/>

    <?php
    foreach ($classes as $class) {
        echo "<div class='tour_players'>";
        echo "<h2>{$class}</h2>";

        foreach ($currentPlayers as $cPlayer) {
            if ($cPlayer->class != $class) {
                continue;
            }
            $disabled = in_array($class, $occupiedClasses);

            echo "<div>"
                . "<form class='fbtn' method='post'>
    <input type='submit' value='-' " . ($disabled ? 'disabled="disabled"' : '') . "/><input type='hidden' name='" . Yii::$app->request->csrfParam . "'
    value='" . Yii::$app->request->csrfToken . "'/>
    <input type='hidden' name='act' value='remove'/>
    <input type='hidden' name='id' value='" . $cPlayer->id . "'/>
    </form>"
                . " &nbsp; {$playerNames[$cPlayer->player_id]}</div>";
        }
        echo "</div>";


        ?>
        <div class='tour_draws'>
            <h2>
                <?php
                if (in_array($class, $occupiedClasses)) {
                ?>
                <form method='post' class="tbtn">
                    <input type='hidden' name='<?= Yii::$app->request->csrfParam ?>'
                           value='<?= Yii::$app->request->csrfToken ?>'/>
                    <input type='hidden' name='act' value='draw-remove'/>
                    <input type='hidden' name='class' value='<?= $class ?>'/>
                    <input type='hidden' name='tid' value='<?= $model->id ?>'/>
                    <input type='submit' value='-'/>
                </form>
<!--                    <a href="">счет</a>-->

                <?php } else { echo '&nbsp;';} ?>
            </h2>
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
                Создать <input name="cnt" size="1"> групп
                <input type='submit' value='>'/>
                &nbsp;или&nbsp;
                <input type='submit' value='сетка' onclick="$(this).parent().find([name=act]).val('draw-add-olymp');"/>
            </form>
            <?php } else {
                $i = 0;
                $grDic = 'ABCDEFGHJKLMNOPQRST';
                foreach ($classDraws as $clDraw) {
                    echo '<b>Группа ' . ($grDic[$i] ?? '') . '</b></br>';
                    $pls = $clDraw->getDrawPlayers()->all();
                    foreach ($pls as $pl) {
                        $buf = $pl->getPlayer()->one();
//                        echo $buf->id . ' - ';
                        echo $buf->name . '</br>';
                    }
                    $i++;
                    echo '</br></br>';
                }

            } ?>
            </div>
        </div>
    <?php
        echo "<div class='clear'></div>";
    }

    ?>

</div>
