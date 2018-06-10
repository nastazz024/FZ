<div class="box-product">
<?php

foreach ($accss as $accs) {
    echo $this->render('/product/_accss', [
        'accss' => $accss,
        'view' => $view,
        ]);
}

?>
</div>