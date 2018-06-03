<div class="box-product">
<?php

foreach ($shirts as $shirt) {
    echo $this->render('/product/_shirt', [
        'shirt' => $shirt,
        'category' => $categories[$shirt->category],
        'colors' => $colors,
        'view' => $view,
        ]);
}

?>
</div>