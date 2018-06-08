<?php


//if (!empty($sizes)) {
//    ///
//}


echo '
    <section id="card" class="card">
		<div class="container">
			<!--<div class="product d-flex">
				&lt;!&ndash; <div class="product__photo">
					<img src="img/1.jpg">
					<img src="img/2.jpg">
				</div> &ndash;&gt;
				<div class="product__photo_active">				
					<div class="product__active">
						<img src="img/1.jpg">			
					</div>
					<div class="product__active d-none">
						<img src="img/2.jpg">			
					</div>					
				</div>
				<div class="product__description">
					<h2 class="product__title">
						Футболка
					</h2>
					<p class="product__price">
						59 р
					</p>
					<div class="product__size">
						<div class="product__name">
							Выберите размер	                     
							<a href="#">
								Таблица размеров
							</a>
						</div>						
						<ul class="size__list d-flex">	
							<li>
								<a href="#" class="size__item">
									S
								</a>
							</li>
							<li>
								<a href="#" class="size__item">
									M
								</a>
							</li>
							<li>
								<a href="#" class="size__item">
									L
								</a>
							</li>
							<li>
								<a href="#" class="size__item">
									XL
								</a>
							</li>
							<li>
								<a href="#" class="size__item">
									XXL
								</a>
							</li>							
						</ul>				

					</div>
					<div class="basketp">
						<button type="submit" class="basket__btn">
							Добавить в корзину
						</button>
						
					</div>
				</div>	
			</div>-->
			
			<div id="tabs">
				<ul class="tab-title">
					<li><a href="#tabs-1">Описание</a></li>
					<li><a href="#tabs-2">Характеристики</a></li>
					<li><a href="#tabs-3">Доставка</a></li>
					<li><a href="#tabs-4">Отзывы</a></li>
				</ul>
				<div id="tabs_container">
					<div id="tabs-1">
						<p>
							'.$item->description .'
						</p>
					</div>
					<div id="tabs-2">
						<p>
						    '.$item->description .'	
						</p>
					</div>
					<div id="tabs-3">
						<p>
							Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. 
						</p>
					</div>
					
					<div id="tabs-4">
						<p>
							Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. 
						</p>
						<div class="comment">
							<a href="#" class="comment__rules">
								Правила оформления отзывов
							</a>						
							<button class="comment__btn">
								Добавить отзыв
							</button>
						</div>
					</div>
				</div>
			</div> 

			<div id="accordion">
				<h3 class="tab-title">Описание</h3>
				<div id="tabs_container">
					<p>
						Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris.
					</p>
				</div>
				<h3 class="tab-title">Характеристики</h3>
				<div id="tabs_container">
					<p>
						Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris.
					</p>
				</div>
				<h3 class="tab-title">Доставка</h3>
				<div id="tabs_container">
					<p>
						Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris.
					</p>
				</div>
				
				<h3 class="tab-title">Отзывы</h3>
				<div id="tabs_container">
					<p>
						Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris.
					</p>
					<div class="comment">
						<a href="#" class="comment__rules">
							Правила оформления отзывов
						</a>						
						<button class="comment__btn">
							Добавить отзыв
						</button>
					</div>
				</div>
			</div>
		</div >	
	</div>
</section>
                                        
                                     ' ;
