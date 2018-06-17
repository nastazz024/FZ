<?php

?>
<li class="cart-list__item">
    <div class="cart-list__imgc">
        <a href="#"><img src="/img/<?php echo $product->image?>" alt=""></a>
    </div>
    <div class="cart-list__infoc">
        <h6 class="product__title"><a href="/details/<?php echo $item['type'] . '/' . $product->id ?>"><?php echo $product->name ?></a></h6>
        <div class="cart-list__details">
            <span class="price"><?php echo $product->price ?> руб.</span>
            <span class="product__details">
                <?php  if (!empty($size)) { ?>
											<span><?php echo $size->name ?></span> •
                <?php } ?>
                <!--											<span>--><?php //echo $color->color ?><!--</span> • -->
											<span><?php echo $item['qty'] ?> шт.</span>
										</span>
        </div>
    </div>
    <!-- <div class="cart-list__delete">
        <a href="#" class="js-remove-cart" data-key="<?php echo $key ?>">
            <span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
        </a>
    </div> -->
</li>