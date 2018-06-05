<div class="box-product">
<?php

foreach ($jackets as $jacket) {
    echo $this->render('/product/_jacket', [
        'jacket' => $jacket,
        'category' => $categories[$jacket->category],
        'colors' => $colors,
        'view' => $view,
        ]);
}

?>
</div>