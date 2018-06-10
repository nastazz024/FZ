<?php


use app\components\ComponentsTrait;

$total = 0;


///  все размерв маек
/// $product->sizes

?>


<a href="#" class="profile-menu__link">
					<span class="basket">
						<span class="icon-bag"></span>
						<span class="badge"><?php echo count($items); ?></span>
					</span>
					<span class="b-price">165 руб.</span>
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

                                case 'shuttle':
                                    $sizes = ComponentsTrait::getShuttleSizes();
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
							<a href="#" class="btn">Оформить</a>
						</div>
					</div>
				</div>







