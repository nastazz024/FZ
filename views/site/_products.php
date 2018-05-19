<div class="box-product">
<?php

foreach ($products as $product) {
    echo $this->render('/site/_product', [
        'product' => $product, 
        'category' => $categories[$product->category],
        'colors' => $colors,
        'view' => $view,
        ]);
}

?>
</div>