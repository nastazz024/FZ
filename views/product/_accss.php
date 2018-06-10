<div class="box-product">
<?php

foreach ($accss as $accs) {
    echo $this->render('/product/_accs', [
        'accs' => $accs,
        'view' => $view,
        ]);
}

?>
</div>