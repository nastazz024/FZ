<?php

$this->registerJSFile('@web/js/slick.js', ['depends' => [yii\web\JqueryAsset::className()]]);
//$this->registerCSSFile('@web/css/slick.less');
$this->registerCSSFile('@web/css/slick.css'); ?>
    <!--
    <section class="lazy slider" data-sizes="50vw" id="slider1">
        <div>
            <img data-lazy="http://placehold.it/350x300?text=1-350w" data-srcset="http://placehold.it/650x300?text=1-650w 650w, http://placehold.it/960x300?text=1-960w 960w" data-sizes="100vw">
        </div>
        <div>
            <img data-lazy="http://placehold.it/350x300?text=2-350w" data-srcset="http://placehold.it/650x300?text=2-650w 650w, http://placehold.it/960x300?text=2-960w 960w" data-sizes="100vw">
        </div>
        <div>
            <img data-lazy="http://placehold.it/350x300?text=3-350w"  data-srcset="http://placehold.it/650x300?text=3-650w 650w, http://placehold.it/960x300?text=3-960w 960w" data-sizes="100vw">
        </div>
        <div>
            <img data-lazy="http://placehold.it/350x300?text=4-350w"  data-srcset="http://placehold.it/650x300?text=4-650w 650w, http://placehold.it/960x300?text=4-960w 960w" data-sizes="100vw">
        </div>
        <div>
            <img data-lazy="http://placehold.it/350x300?text=5-350w"  data-srcset="http://placehold.it/650x300?text=5-650w 650w, http://placehold.it/960x300?text=5-960w 960w" data-sizes="100vw">
        </div>
        <div>
            <!-- this slide should inherit the sizes attr from the parent slider -->
        <img data-lazy="http://placehold.it/350x300?text=6-350w"  data-srcset="http://placehold.it/650x300?text=6-650w 650w, http://placehold.it/960x300?text=6-960w 960w">
    </div>
</section>-->
<?php

$scr = <<<JS
$('#slider1').slick({
  slidesToShow: 4,
  slidesToScroll: 4
});
JS;

$this->registerJS($scr, \yii\web\View::POS_READY);