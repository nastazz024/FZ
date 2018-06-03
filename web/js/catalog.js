$(function () {
    'use strict';

    var $cart = $('#cart-container');
    var $container = $('div.content');


    var loadShirts = function () {
        var $colorFiltersContainer = $('#colors-filter');
        var $sizeFiltersContainer = $('#size-filter');
        var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
        var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming


        var payload = {};

        // сбор данных фильтра
        var colors = [];
        $.each($colorFiltersContainer.find('input[type="checkbox"]:checked'), function(pos, el) {
            colors.push($(el).val());
        });
        payload.colors = colors;


        // todo filter by size
        var size = [];
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function(pos, el) {
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

        payload.cat = getUrlParameter('cat');


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/shirts', payload, function(resp) {
            $container.html(resp);
        });
    };

    var loadRackets = function () {
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        /// сортировка
        payload.sort = {
            field: $('.menu__sort.active').data('type'),
            dir: $('.menu__sort.active').find('.arrow-down.gray').length ? 'desc' : 'asc'
        };


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/rackets', payload, function(resp) {
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
    };

    var addShirt = function(id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.size = size;
        payload.type = 'shirt';

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });
    };

    var addRacket = function(id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'racket';

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });
    };

    var delItem = function(key) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.key = key;

        $.post('/cart/del', payload, function(resp) {
            $cart.html(resp);
        });
    };


    var loadFn = function() {console.error('unknown kind')};
    switch (_layout) {
        case 'shirt':
            var $colorFiltersContainer = $('#colors-filter');
            var $sizeFiltersContainer = $('#size-filter');
            var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming

            $colorItems.on('change', loadFn);
            $sizeItems.on('change', loadFn);

            loadFn = loadShirts;
            break;

        case 'racket':
            loadFn = loadRackets;
            break;
    }


    // переключение вида списка
    $('.filter-list__item a').on('click', function(ev) {
        ev.preventDefault();

        $('.filter-list__item').removeClass('active');
        $(ev.target).parents('li').addClass('active');

        loadFn();
    });

    $container.on('click', '.add-cart-item.shirt', function(ev) {
        ev.preventDefault();
        addShirt($(ev.target).data('id'), 1);
        loadCart();
    });

    $container.on('click', '.add-cart-item.racket', function(ev) {
        ev.preventDefault();
        addRacket($(ev.target).data('id'));
        // loadCart();
    });

    $cart.on('click', '.js-remove-cart', function(ev) {
        ev.preventDefault();
        delItem($(ev.target).closest('a').data('key'));
        // loadCart();
    });

    $('.menu__sort').click(function () {
        loadFn();
    });

    loadFn();
    loadCart();

});