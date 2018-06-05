<div class="box-product">
    <?php
    foreach ($shoeses as $shoes) {
        echo $this->render('/product/_shoes', [
            'shoes' => $shoes,
            'category' => $categories[$shoes->category],
//        'colors' => $colors,
            'view' => $view,
        ]);
    }
    ?>
</div>