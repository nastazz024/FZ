$(function () {
    'use strict';
    var $filters = $('#colors-filter');
    var $container = $('div.content');
    var $cart = $('#cart-container');
    var $items = $filters.find('input[type="checkbox"]');
  

    var loadPr = function () {
        var payload = {};

        // сбор данных фильтра
        var colors = [];
        $.each($filters.find('input[type="checkbox"]:checked'), function(pos, el) {
            colors.push($(el).val());
        });
        payload.colors = colors;

        // todo filter by size


        payload.cost = {};
        payload.cost.min = $("#slider-range").slider("values", 0);
        payload.cost.max = $("#slider-range").slider("values", 1);


        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        /// сортировка
        payload.sort = {field: 'price', dir: 'asc'};

        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/site/shirt', payload, function(resp) {
            $container.html(resp);
        });
    };

    var loadCart = function() {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/cart', payload, function(resp) {
            $cart.html(resp);
        });
    }

    var addShirt = function(id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.size = size;

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });
    }



    // переключение вида списка
    $('.filter-list__item a').on('click', function(ev) {
        ev.preventDefault();

        $('.filter-list__item').removeClass('active');
        $(ev.target).parents('li').addClass('active');

        loadPr();
    });

    $container.on('click', '.add-cart-item', function(ev) {
        ev.preventDefault();
        addShirt($(ev.target).data('id'), 'X');
    });

    $('sort__item').on('click', function (){
        $('.sort__item span').addClass('d-none');
        // $(".icon-arrow-up2").toggleClass(".d-flex");
    
    });

    $items.on('change', loadPr);

    loadPr();
    loadCart();

        

});