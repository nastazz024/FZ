
<?php

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
                        foreach ($items as $key => $item) { ?>
                            <?php

                            switch ($item['type']) {
                                case 'shirt':
                                    echo $this->render('_shirt', [
                                        'shirt' => $shirts[$item['id']],
                                        'size' => $sizes[(int)$item['size']],
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'racket':
                                    echo $this->render('_racket', [
                                        'racket' => $rackets[$item['id']],
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                                case 'shoes': // TODO
                                              break;
                                    echo $this->render('_racket', [
                                        'racket' => $rackets[$item['id']],
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                            }

                         } ?>
						</ul>
						<div class="cart-footer">
							<span class="total">Итого</span>
							<span class="price">210 руб.</span>
							<a href="#" class="btn">Оформить</a>
						</div>
					</div>
				</div>







