
        <?php if ($view == 'list') { 
            echo ' 
            
	 <div class="product product--horizontal">
    <div class="product__image">
        <img src="/img/'.$racket_accs->image .'" alt="" class="mini-img">

    </div>

    <div class="product__content">
        <h6 class="product__title"><a href="/details/racket_accs/'.$racket_accs->id.'">'.$racket_accs->name.'</a></h6>
        
    </div>

    <div class="product__footer hit">
        <span class="price">'.$racket_accs->price.' руб.</span>

    </div>
    <div class="product__card">
        
        <a href="#" class="btn add-cart-item racket_accs" data-id='.$racket_accs->id.'>В корзину</a>
        <br>

    </div>
</div>';}
else { echo '
    <div class="product">
									<h2 class="product__title"><a href="/details/racket_accs/'.$racket_accs->id.'">'. $racket_accs->name .'</a></h2>
									<div class="product__img">
										<img src="/img/'.$racket_accs->image .'" alt="">
										<p class="description racket_accs">'.$racket_accs->description .'</p>
										<div class="product__card">
											
											<a href="#" class="btn add-cart-item racket_accs" data-id='.$racket_accs->id.' >В корзину</a>
											</div>
										</div>
										<div class="product__footer">
										<span class="price">'.$racket_accs->price .' руб.</span>
									</div>
									</div>
									
								
									
									 
									 
									 
                                        
                                     ' ;
}