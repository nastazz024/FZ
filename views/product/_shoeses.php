<div class="box-product">
<?php

foreach ($shoeses as $shoe) {
    echo $this->render('/product/_shoes', [
        'shoes' => $shoe,
        'category' => $categories[$shoe->category],
//        'colors' => $colors,
        'view' => $view,
        ]);
}

?>
</div>