!!!
<?php

$total = 0;


///  все размерв маек
/// $product->sizes

?>


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

                                case 'shoes': /// TODO
                                      break;
                                    echo $this->render('_shoes', [
                                        'shoes' => $shoeses[$item['id']],
                                        'item' => $item,
                                        'key' => $key,
                                    ]);
                                    break;

                            }

                         } ?>
						</ul>



							<a href="#" class="btn">Оформить</a>





