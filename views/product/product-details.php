<?php


//if (!empty($sizes)) {
//    ///
//}


echo '
    <section id="carddet" class="carddet">
		<div class="containerdet">
			
				<div class="product__photo_active" style="float: left;">	
							<img src="/img/'.$item->image.'" style="width: 310px">
					<div class="product__active">	
					</div>
					<div class="product__active d-none">
								
					</div>					
				</div>
				<div class="product__description">
					<h2 class="productdet__title">
						'.$item->name.'
					</h2>
					<p class="product__price">
						'.$item->price.' руб.
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
									
								</a>
							</li>
										
						</ul>				

					</div>
					<div class="basketp">
						<button type="submit" class="basket__btn" '.$item->id.'>
							Добавить в корзину
						</button>
						
					</div>
				</div>	
			</div>
			<div style="clear: both;"></div>
			<div class="tabdet">
    <!-- Кнопка-переключатель и название первого таба -->
    <input type="radio" name="tabdet" id="tab-first" checked >
    <label for="tab-first">
        <p>Описание</p>
    </label>
    <!-- Кнопка-переключатель и название второго таба -->
    <input type="radio" name="tabdet" id="tab-second">
    <label for="tab-second">
        <p>Доставка</p>
    </label>
    <!-- Вывод контента наших табов -->
    <div id="tab-content-1" class="tab-content">
        <p>
           '.$item->description.'
        </p>
    </div> <!-- #tab-content-1 -->
    <div id="tab-content-2" class="tab-content">
    <p><strong>ОПЛАТА</strong></p>
<p>Оплата наличными.</p>
<br>
<p><strong>ДОСТАВКА ПО МИНСКУ</strong></p>
<p>1. СРОК ДОСТАВКИ</p>
<p>Доставка по Минску осуществляется в течение дня с момента поступления и обработки заказа</p>

<p>2. СТОИМОСТЬ ДОСТАВКИ ПО МИНСКУ – 8Р.</p>
<p>3. САМОВЫВОЗ – БЕСПЛАТНО</p>
<p>Из офиса: ул. Пархоменко, 3, подъезд 1, Минск, Беларусь</p>
<br>
<p><strong>ДОСТАВКА ПО БЕЛАРУСИ</strong></p>
<p>1. СТОИМОСТЬ ДОСТАВКИ ПО РБ КАК ПРАВИЛО –  10Р.</p>
<p>2. СРОКИ ДОСТАВКИ ПО БЕЛАРУСИ</p>
<p>Доставка в города Беларуси осуществляется Белпочтой. Отправка заказа осуществляется в течение 24 часов с момента оплаты заказа. Время заказа в пути около 12 часов в зависимости от Вашего местоположения.</p></p>   </div> <!-- #tab-content-2 -->
</div>
</div>
		</div >	
	</div>
</section>
                                        
                                     ' ;
