<?php


use app\components\ComponentsTrait;

$total = 0;
foreach ($items as $key => $item) {
    switch ($item['type']) {
        case 'shirt':
            $item_ = $shirts[$item['id']];
            break;

        case 'racket':
            $item_ = $rackets[$item['id']];
            break;

        case 'jacket':
            $item_ = $jackets[$item['id']];
            break;

        case 'shoes':
            $item_ = $shoeses[$item['id']];
            break;

        case 'shuttle':
            $item_ = $shuttles[$item['id']];
            break;

        case 'racket_accs':
            $item_ = $rackets_accs[$item['id']];
            break;

        case 'accs':
            $item_ = $accss[$item['id']];
            break;

        case 'short':
            $item_ = $shorts[$item['id']];
            break;

        case 'bag':
            $item_ = $bags[$item['id']];
            break;
    }

    $total += $item_->price * $item['qty'];
}
?>


<a href="#" class="profile-menu__link">
					<span class="basket">
						<span class="icon-bag"></span>
						<span class="badge"><?php echo count($items); ?></span>
					</span>
					<span class="b-price"><?php echo $total ?> Br</span>
				</a>
				<div class="dropdown-content">
					<div class="cart">
						<ul class="cart-list scroll-content">
                        <?php

                        $sizePlaceholder = new stdClass();
                        $sizePlaceholder->name = '---';

                        foreach ($items as $key => $item) {
                            $sizes = null;

                            switch ($item['type']) {
                                case 'shirt':
                                    $sizes = ComponentsTrait::getShirtSizes();
                                    break;

                                case 'jacket':
                                    $sizes = ComponentsTrait::getJacketSizes();
                                    break;

                                case 'shoes':
                                    $sizes = ComponentsTrait::getShoesSizes();
                                    break;


                                case 'short':
                                    $sizes = ComponentsTrait::getShortSizes();
                                    break;

                                case 'bag':
                                    $sizes = ComponentsTrait::getBagModel();
                                    break;
                            }



                            $size = null;
                            if (isset($item['size']) && isset($sizes[(int)$item['size']])) {
                                $size = isset($sizes[(int)$item['size']]) ? $sizes[(int)$item['size']] : $sizePlaceholder;
                            }


                            switch ($item['type']) {
                                case 'shirt':
                                    echo $this->render('_shirt', [
                                        'shirt' => $shirts[$item['id']],
                                        'size' => $size,
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'racket':
                                    echo $this->render('_racket', [
                                        'racket' => $rackets[$item['id']],
                                        'size' => $size,
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'jacket':
                                    echo $this->render('_jacket', [
                                        'jacket' => $jackets[$item['id']],
                                        'size' => $size,
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'shoes':
                                    echo $this->render('_shoes', [
                                        'shoes' => $shoeses[$item['id']],
                                        'size' => $size,
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'shuttle':
                                    echo $this->render('_shuttle', [
                                        'shuttle' => $shuttles[$item['id']],
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'racket_accs':
                                    echo $this->render('_racket_accs', [
                                        'racket_accs' => $rackets_accs[$item['id']],
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'accs':
                                    echo $this->render('_accs', [
                                        'accs' => $accss[$item['id']],
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'short':
                                    echo $this->render('_short', [
                                        'short' => $shorts[$item['id']],
                                        'size' => $size,
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'bag':
                                    echo $this->render('_bag', [
                                        'bag' => $bags[$item['id']],
                                        'size' => $size,
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;
                            }

                         } ?>
						</ul>
						<div class="cart-footer">
							<span class="total">Итого</span>
							<span class="price"><?php echo $total ?> руб.</span>
							<a href="/cart/confirm" class="btn">Оформить</a>
						</div>
					</div>
				</div>







