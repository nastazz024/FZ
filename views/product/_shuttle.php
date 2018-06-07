
        <?php if ($view == 'list') { 
            echo ' 
            
	 <div class="product product--horizontal">
    <div class="product__image">
        <img src="/img/'.$shuttle->image .'" alt="" class="mini-img">

    </div>

    <div class="product__content">
        <h6 class="product__title"><a href="'.$shuttle->id.'">'.$shuttle->name.'</a></h6>
    </div>

    <div class="product__footer hit">
        <span class="price">'.$shuttle->price.' руб.</span>

    </div>
    <div class="product__card">
        
        <a href="#" class="btn add-cart-item shuttle" data-id='.$shuttle->id.'>В корзину</a>
        <br>

    </div>
</div>';}
else { echo '
    <div class="product">
									<h2 class="product__title"><a href="'.$shuttle->id.'">'. $shuttle->name .'</a></h2>
									<div class="product__img">
										<img src="/img/'.$shuttle->image .'" alt="">
										<p class="description">'.$shuttle->description .'</p>
										<div class="product__card">
											
											<a href="#" class="btn add-cart-item shuttle" data-id='.$shuttle->id.' >В корзину</a>
											</div>
										</div>
										<div class="product__footer">
										<span class="price">'.$shuttle->price .' руб.</span>
									</div>
									</div>
									
								
									
									 
									 
									 
                                        
                                     ' ;
}?>