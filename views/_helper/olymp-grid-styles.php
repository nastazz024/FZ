<?php

/** @var int $oCnt */
/** @var bool $simple */

$cols = (pow(2, $oCnt) / ($simple ? 1 : 2));
$rows = ($oCnt + 1);
?>

<style>
    .g-tree {
        display: grid;
        grid-template-rows: repeat(<?= $cols ?>, <?= ($simple ? '50px' : '150px') ?>);
        grid-template-columns: repeat(<?= $rows ?>, 1fr);
        grid-gap: 1em;
        flex-flow: wrap;
    }

    .g-tree .line-break {
        width: 100%;
    }

    <?php

    for ($i = 1; $i <= $oCnt; $i++) {
        for ($j = 1; $j <= (pow(2, $oCnt-$i+1) / ($simple ? 1 : 2)); $j += 1) {

            if (!isset($ind[$j])) {
                $ind[$j] = 0;
            }

            $span = pow(2, $i-1);
            $row = ($j-1) * ($span)+1;
            ?>
    .g-tree .i<?= $i . $j ?> {
        grid-column: <?= $i ?>;
        grid-row: <?= $row ?> / span <?= $span ?>;
    <?php
    if ($simple) {
        if ($i != 1) {
        ?>
        border-left: 1px solid grey;
        padding-left: 15px;
        <?php
        }
        if ($j % 2 === 1) {
            ?> border-top: 1px solid grey;
            <?php
        }

        if ( $j % 2 === 0) {
            ?> border-bottom: 1px solid grey;
            <?php
        }
        ?>

        <?php }
        ?>
    }

    <?php
        }

    }

    $span = pow(2, $i-2);
    $j = 1;
    $row = ($j-1) * ($span)+1;
    ?>
    .g-tree .i<?= $i . $j ?> {
        grid-column: <?= $i ?>;
        grid-row: <?= $row ?> / span <?= $simple ? $span * 2: $span ?>;
    <?php
    if ($simple) {?>
        border-left: 1px solid grey;
        padding-left: 15px;
    <?php }
    ?>
    }

    .g-tree .item {
        display: flex;
        align-items: center;
    }
</style>
