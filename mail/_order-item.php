<?php

?>
<li class="cart-list__item">
    <div class="cart-list__img">
        <?php $img = isset($message) ? $message->embed($images[$key]) : '/img/' . $product->image ?>
        <a href="#"><img src="<?php echo $img; ?>" alt=""></a>
    </div>
    <div class="cart-list__info">
        <h6 class="product__title"><a href="http://fz/details/<?php echo $item['type'] . '/' . $product->id ?>"><?php echo $product->name ?></a></h6>
        <div class="cart-list__details">
            <span class="price"><?php echo $product->price ?> Br</span>
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