<div class="box-product">
<?php

foreach ($shorts as $short) {
    echo $this->render('/product/_short', [
        'short' => $short,
        'category' => $categories[$short->category],
        'colors' => $colors,
        'view' => $view,
        ]);
}

?>
</div>