
<?php

$total = 0;

?>


<a href="#" class="profile-menu__link">
					<span class="basket">
						<span class="icon-bag"></span>
						<span class="badge">3</span>
					</span>
					<span class="b-price">165 руб.</span>
				</a>
				<div class="dropdown-content">
					<div class="cart">
						<ul class="cart-list">
                        <?php 
                        foreach ($products as $product) { ?>
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="/img/badminton-tee-pontiac-fzforza.jpg" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#"><?php echo $product->name ?></a></h6>
									<div class="cart-list__details">
										<span class="price">30 руб.</span>
										<span class="product__details">
											<span>S</span> • 
											<span>Голубой</span> • 
											<span>1 шт.</span>  
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







