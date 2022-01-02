<?php

$list = [
        'accs' => [
                'url' => '',
                'title' => 'Аксессуары',
        ],
        'bag' => [
            'url' => '',
            'title' => 'Сумки',
        ],
        'shirt' => [
                'url' => '',
                'title' => 'Майки',
        ],
        'jacket' => [
                'url' => '',
                'title' => 'Куртки',
        ],
        'racket' => [
                'url' => '',
                'title' => 'Ракетки',
        ],
        'shoes' => [
                'url' => '',
                'title' => 'Обувь',
        ],
        'short' => [
                'url' => '',
                'title' => 'Шорты',
        ],
        'shuttle' => [
                'url' => '',
                'title' => 'Воланы',
        ],

];

uasort($list, function ($a, $b) {
    return $a['title'] <=> $b['title'];
});
?>

<ul class="nav nav-pills nav-stacked">

    <?php
    foreach ($list as $key => $item) { ?>
        <li role="presentation" <?= ($m == $key ? 'class="active"' : '') ?>>
            <a href="/admin/shop/?m=<?= $key ?>"><?= $item['title'] ?></a>
        </li>
    <?php }
    ?>

</ul>
