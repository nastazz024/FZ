<div class="box-product">
<?php

foreach ($rackets as $racket) {
    echo $this->render('/product/_racket', [
        'racket' => $racket,
        'view' => $view,
        ]);
}

?>
</div>