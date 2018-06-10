<?php

echo '
    <div class="product">
									<h2 class="product__title"><a href="#">'. $shirt->name .'s</a></h2>
									<div class="product__img">
										<img src="/img/'.$shirt->image .'" alt="">
										<p class="description">'.$shirt->description .'!!!</p>
										<div class="product__card">
											<select class="styler jq-selectbox__select">
												<option value="">Размер</option>
												<option value="">XS</option>
												<option value="">S</option>
												<option value="">M</option>
												<option value="">L</option>
												<option value="">XL</option>
												<option value="">XXL</option>
											</select>
											<a href="#" class="btn add-cart-item shirt" data-id='.$shirt->id.' >В корзину</a>
											</div>
										</div>
										<div class="product__footer">
										<span class="price">'.$shirt->price .' руб.</span>
									</div>
									</div>
									
								
									
									 
									 
									 
                                        
                                     ' ;
