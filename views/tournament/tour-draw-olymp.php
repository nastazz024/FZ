<?php

use app\models\DrawPlayersMatches;
use yii\helpers\Html;

/** @var \app\models\Tournament $model */
/** @var \app\models\Draws $draw */


$drPlayers = $draw->getDrawPlayers()->orderBy('id')->all();
///
/// todo
///


$drPlayersCnt = count($drPlayers);
$olympData = $draw->getOlympData();


$oCnt = count($olympData);

echo '<style>';
echo '
.three {
  display: grid;
  grid-template-rows: repeat(' .(pow(2, $oCnt)/2).', 150px);
  grid-template-columns: repeat('.($oCnt+1).', 1fr);
  grid-gap: 1em;
}
  ';

for ($i = 1; $i <= $oCnt; $i++) {
    for ($j = 1; $j <= (pow(2, $oCnt-$i+1) /2); $j += 1) {

        if (!isset($ind[$j])) {
            $ind[$j] = 0;
        }

            $span = pow(2, $i-1);
            $row = ($j-1) * ($span)+1;
            echo '.i' . ($i ) . ($j) . ' {';
            echo "
                  grid-column: {$i};
                  grid-row: {$row} / span {$span};";
            echo  "}\n";

    }

}

$span = pow(2, $i-1);
$j=1;
$row = ($j-1) * ($span)+1;
echo '.i' . ($i ) . ($j) . ' {';
echo "
                  grid-column: {$i};
                  grid-row: {$row} / span {$span};";
echo  "}\n";

echo "\n\n";



echo '
.item {
  display: flex;
  align-items: center;
};';


echo '</style>';


?>
<div class="tournament-players">
    <h1><a href="/admin/tournaments/view?id=<?= $model->id ?>"><?= $model->name ?> (<?= $draw->class ?>)</a></h1>
    <div class="draws-score">

        <?php

        $cnt = count($olympData);


        $roundCount = count($olympData);

        echo '<div class="draw-score olymp three">';
        for ($rInd = 0; $rInd < $roundCount;   $rInd++) {

            for ($topInd = 0; $topInd < count($olympData[$rInd]);  $topInd++) {

                $data = $olympData[$rInd][$topInd] ?? null;
                if (empty($data)) {
                    continue;
                }
                $drPlId1 = $data['dr_player1']->id;
                $drPlId2 = $data['dr_player2']->id ?? null;

                echo '<div class="i' . ($rInd+ 1) . ($topInd  + 1) . ' item">';

                if ($drPlId1 && $drPlId2) {
                ?>
                <form method='post'>
                    <input type='hidden' name='<?= Yii::$app->request->csrfParam ?>'
                           value='<?= Yii::$app->request->csrfToken ?>'/>
                    <input type='hidden' name='act' value='set-olymp-score'/>
                    <input type='hidden' name='tid' value='<?= $model->id ?>'/>
                    <input type='hidden' name='class' value='<?= $draw->class ?>'/>
                    <input type='hidden' name='dr_pl_id1' value='<?= $drPlId1 ?>'/>
                    <input type='hidden' name='dr_pl_id2' value='<?= $drPlId2 ?>'/>
                    <?php


                    echo $data['dr_player1']->getPlayer()->one()->name;
                    echo ' / ';
                    if ($data['dr_player2']) {
                        echo $data['dr_player2']->getPlayer()->one()->name ?? '';
                    }
                    echo '<br/>';

                    $dis = $draw->completed ? ' disabled="disabled"' : '';
                    for ($z = 0; $z < $draw->matches_count; $z++) {
                        $score1 = $data['matches'][$z]->player1_score ?? '';
                        $score2 = $data['matches'][$z]->player2_score ?? '';

                        echo "<input type='number' size=1 min=0 max=30 name='nscore[" . $z . "][" . $drPlId1 . "]' value='" . ($score1) . "'" . $dis . ">
                                / <input type='number' size=1 min=0 max=30 name='nscore[" . $z . "][" . $drPlId2 . "]' value='" . ($score2) . "'" . $dis . "><br/>";
                    }


                    echo '<br/><input type="submit" value="set"/></form>';
                    } else {


                        echo $data['dr_player1']->getPlayer()->one()->name;
                        echo ' / ';
                        if ($data['dr_player2']) {
                            echo $data['dr_player2']->getPlayer()->one()->name ?? '';
                        }
                        echo '<br/>';

                    }
                    echo '</div>';
                }
            }


            if (!empty($olympData[$roundCount-1][0]['winner']['player'])) {
                $col = $roundCount+1;
                echo "<div class='i{$col}1 item'>";

                echo '<b> ' .   $olympData[$roundCount-1][0]['winner']['player']->name . '</b>';
                echo "</div>";
            }

            echo '</div>';

            ?>


    </div>
</div>
