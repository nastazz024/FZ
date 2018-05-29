
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
                        foreach ($items as $item) { ?>
                            <?php
                            if ($item['type'] != 'shirt') {
                                continue; /// todo remove
                            }
                            $shirt = $shirts[$item['id']];
							$size = $sizes[(int)$item['size']];
                            $color = $colors[(int)$item['color']];
                            // $colors
                            ?>
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="/img/<?php echo $shirt->image?>" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#"><?php echo $shirt->name ?></a></h6>
									<div class="cart-list__details">
										<span class="price"><?php echo $shirt->price ?> Br</span>
										<span class="product__details">
											<span><?php echo $size->name ?></span> •
											<span><?php echo $color->color ?></span> • 
											<span><?php echo $item['qty'] ?> шт.</span>
										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="#" class="js-remove-cart">
										<span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</li>
                        <?php } ?>
						</ul>
						<div class="cart-footer">
							<span class="total">Итого</span>
							<span class="price">210 руб.</span>
							<a href="#" class="btn">Оформить</a>
						</div>
					</div>
				</div>







