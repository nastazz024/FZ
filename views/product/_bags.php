<div class="box-product">
<?php

foreach ($bags as $bag) {
    echo $this->render('/product/_bag', [
        'bag' => $bag,
        'view' => $view,
        ]);
}

?>
</div>