<div class="box-product">
<?php

foreach ($rackets_accs as $racket_accs) {
    echo $this->render('/product/_racket_accs', [
        'racket_accs' => $racket_accs,
        'view' => $view,
        ]);
}

?>
</div>