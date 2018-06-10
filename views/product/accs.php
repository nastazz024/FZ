
        <?php if ($view == 'list') { 
            echo ' 
            
	 <div class="product product--horizontal">
    <div class="product__image">
        <img src="/img/'.$accs->image .'" alt="" class="mini-img">

    </div>

    <div class="product__content">
        <h6 class="product__title"><a href="/details/accs/'.$accs->id.'">'.$accs->name.'</a></h6>
        
    </div>

    <div class="product__footer hit">
        <span class="price">'.$accs->price.' руб.</span>

    </div>
    <div class="product__card">
        
        <a href="#" class="btn add-cart-item accs" data-id='.$accs->id.'>В корзину</a>
        <br>

    </div>
</div>';}
else { echo '
    <div class="product">
									<h2 class="product__title"><a href="/details/accs/'.$accs->id.'">'. $accs->name .'</a></h2>
									<div class="product__img">
										<img src="/img/'.$accs->image .'" alt="">
										<p class="description accs">'.$accs->description .'</p>
										<div class="product__card">
											
											<a href="#" class="btn add-cart-item accs" data-id='.$accs->id.' >В корзину</a>
											</div>
										</div>
										<div class="product__footer">
										<span class="price">'.$accs->price .' руб.</span>
									</div>
									</div>
									
								
									
									 
									 
									 
                                        
                                     ' ;
}