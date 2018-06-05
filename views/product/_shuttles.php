<div class="box-product">
<?php

foreach ($shuttles as $shuttle) {
    echo $this->render('/product/_shuttle', [
        'shuttle' => $shuttle,
        'view' => $view,
        ]);
}

?>
</div>