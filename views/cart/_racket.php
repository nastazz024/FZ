<?php


//                            $color = $colors[(int)$item['color']];
// $colors
?>
<li class="cart-list__item">
    <div class="cart-list__img">
        <a href="#"><img src="/img/<?php echo $racket->image?>" alt=""></a>
    </div>
    <div class="cart-list__info">
        <h6 class="product__title"><a href="#"><b><?php echo $racket->name ?></b>!!!!!!!</a></h6>
        <div class="cart-list__details">
            <span class="price"><?php echo $racket->price ?> Br</span>
            <span class="product__details">
											<span><?php echo $racket->name ?></span> •
                <!--											<span>--><?php //echo $color->color ?><!--</span> • -->
											<span><?php echo $item['qty'] ?> шт.</span>
										</span>
        </div>
    </div>
    <div class="cart-list__delete">
        <a href="#" class="js-remove-cart" data-key="<?php echo $key ?>">
            <span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
        </a>
    </div>
</li>