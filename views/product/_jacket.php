
        <?php if ($view == 'list') { 
            echo ' 
            
	 <div class="product product--horizontal">
    <div class="product__image">
        <img src="/img/'.$jacket->image .'" alt="" class="mini-img">

    </div>

    <div class="product__content">
        <h6 class="product__title"><a href="'.$jacket->id.'">'.$jacket->name.'</a></h6>
        <span class="product__category">'.$category->category .'</span>
    </div>

    <div class="product__footer hit">
        <span class="price">'.$jacket->price.' руб.</span>

    </div>
    <div class="product__card">
        <select class="styler jq-selectbox__select">
            <option value="">Размер</option>
            <option value="">S</option>
            <option value="">L</option>
            <option value="">M</option>
        </select>
        <a href="#" class="btn add-cart-item shirt" data-id='.$jacket->id.'>В корзину</a>
        <br>

    </div>
</div>';}
else { echo '
    <div class="product">
									<h2 class="product__title"><a href="'.$jacket->id.'">'. $jacket->name .'</a></h2>
									<div class="product__img">
										<img src="/img/'.$jacket->image .'" alt="">
										<p class="description">'.$jacket->description .'</p>
										<div class="product__card">
											<select class="styler jq-selectbox__select">
												<option value="">Размер</option>';
                                                foreach ($jacket->getSizes() as $size) {
                                                    echo sprintf('<option value="%d">%s</option>', $size->id, $size->name);
                                                }


    echo '</select>
											<a href="#" class="btn add-cart-item shirt" data-id='.$jacket->id.' >В корзину</a>
											</div>
										</div>
										<div class="product__footer">
										<span class="price">'.$jacket->price .' руб.</span>
									</div>
									</div>
									
								
									
									 
									 
									 
                                        
                                     ' ;
}?>