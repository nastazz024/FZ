
        <?php if ($view == 'list') { 
            echo ' 
            
	 <div class="product product--horizontal">
    <div class="product__image">
        <img src="/img/'.$bag->image .'" alt="" class="mini-img">

    </div>

    <div class="product__content">
        <h6 class="product__title"><a href="/details/bag/'.$bag->id.'">'.$bag->name.'</a></h6>
        
    </div>

    <div class="product__footer hit">
        <span class="price">'.$bag->price.' руб.</span>

    </div>
    <div class="product__card">
        
        <a href="#" class="btn add-cart-item bag" data-id='.$bag->id.'>В корзину</a>
        <br>

    </div>
</div>';}
else { echo '
    <div class="product">
									<h2 class="product__title"><a href="/details/bag/'.$bag->id.'">'. $bag->name .'</a></h2>
									<div class="product__img">
										<img src="/img/'.$bag->image .'" alt="">
										<p class="description racket">'.$bag->description .'</p>
										<div class="product__card">
											
											<a href="#" class="btn add-cart-item racket" data-id='.$bag->id.' >В корзину</a>
											</div>
										</div>
										<div class="product__footer">
										<span class="price">'.$bag->price .' руб.</span>
									</div>
									</div>
									
								
									
									 
									 
									 
                                        
                                     ' ;
}