$(function () {
    'use strict';
    var $filters = $('#colors-filter');
    var $filter = $('#size-filter');
    var $container = $('div.content');
    var $cart = $('#cart-container');
    var $items = $filters.find('input[type="checkbox"]');
    var $items_ = $filter.find('input[type="checkbox"]'); /// bad naming
  

    var loadPr = function () {
        var payload = {};

        // сбор данных фильтра
        var colors = [];
        $.each($filters.find('input[type="checkbox"]:checked'), function(pos, el) {
            colors.push($(el).val());
        });
        payload.colors = colors;


        // todo filter by size
        var size = [];
        $.each($filter.find('input[type="checkbox"]:checked'), function(pos, el) {
            size.push($(el).val());
        });
        payload.size = size;
        
        payload.cost = {};
        payload.cost.min = $("#slider-range").slider("values", 0);
        payload.cost.max = $("#slider-range").slider("values", 1);


        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        /// сортировка
        payload.sort = {
            field: $('.menu__sort.active').data('type'), 
            dir: $('.menu__sort.active').find('.arrow-down.gray').length ? 'desc' : 'asc'
        };
        
        //arrow-down gray


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

   /* var delShirt = function(id){
        
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
       

        $.delete('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });
    }
*/

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

    $('.menu__sort').click(function (ev) {
        loadPr();
    });

    $items.on('change', loadPr);
    $items_.on('change', loadPr);

    loadPr();
    loadCart();

  
});