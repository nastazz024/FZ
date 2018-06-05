$(function () {
    'use strict';

    var $cart = $('#cart-container');
    var $container = $('div.content');

    var loadShorts = function () {
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

        payload.kind = _kind;


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/shorts', payload, function(resp) {
            $container.html(resp);
        });
    };



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

        payload.kind = _kind;


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

        //

        /// сортировка
        payload.sort = {
            field: $('.menu__sort.active').data('type'),
            dir: $('.menu__sort.active').find('.arrow-down.gray').length ? 'desc' : 'asc'
        };

        payload.kind = _kind;

        payload.cost = {};
        payload.cost.min = $("#slider-range").slider("values", 0);
        payload.cost.max = $("#slider-range").slider("values", 1);


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/rackets', payload, function(resp) {
            $container.html(resp);
        });
    };

    var loadBags = function () {
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        //

        /// сортировка
        payload.sort = {
            field: $('.menu__sort.active').data('type'),
            dir: $('.menu__sort.active').find('.arrow-down.gray').length ? 'desc' : 'asc'
        };

        payload.kind = _kind;

        payload.cost = {};
        payload.cost.min = $("#slider-range").slider("values", 0);
        payload.cost.max = $("#slider-range").slider("values", 1);


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/bags', payload, function(resp) {
            $container.html(resp);
        });
    };

    var loadShuttles = function () {
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        payload.kind = _kind;

        /// сортировка
        payload.sort = {
            field: $('.menu__sort.active').data('type'),
            dir: $('.menu__sort.active').find('.arrow-down.gray').length ? 'desc' : 'asc'
        };

        payload.cost = {};
        payload.cost.min = $("#slider-range").slider("values", 0);
        payload.cost.max = $("#slider-range").slider("values", 1);


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/shuttles', payload, function(resp) {
            $container.html(resp);
        });
    };

    var loadShoes = function () {
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        //

        /// сортировка
        payload.sort = {
            field: $('.menu__sort.active').data('type'),
            dir: $('.menu__sort.active').find('.arrow-down.gray').length ? 'desc' : 'asc'
        };

        payload.kind = _kind;

        payload.cost = {};
        payload.cost.min = $("#slider-range").slider("values", 0);
        payload.cost.max = $("#slider-range").slider("values", 1);


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/shoeses', payload, function(resp) {
            $container.html(resp);
        });
    };

    var loadJackets = function () {
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

        payload.kind = _kind;


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/jackets', payload, function(resp) {
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

    var addJacket = function(id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.size = size;
        payload.type = 'jacket';

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

    var addShuttle = function(id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'shuttle';

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });

    };

    var addShort = function(id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'short';

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });

    };


    var addShoes = function(id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'shoes';

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });
    };

    var addBag = function(id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'bag';

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
    /// init catalog page
    switch (_layout) {
        case 'shirt':
            var $colorFiltersContainer = $('#colors-filter');
            var $sizeFiltersContainer = $('#size-filter');
            var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]');

            loadFn = loadShirts;

            $colorItems.on('change', loadFn);
            $sizeItems.on('change', loadFn);
            break;

        case 'jacket':
            var $colorFiltersContainer = $('#colors-filter');
            var $sizeFiltersContainer = $('#size-filter');
            var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]');

            loadFn = loadJackets;

            $colorItems.on('change', loadFn);
            $sizeItems.on('change', loadFn);
            break;

        case 'racket':
            var $colorFiltersContainer = $('#colors-filter');
            var $sizeFiltersContainer = $('#size-filter');
            var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming

            loadFn = loadRackets;

            $colorItems.on('change', loadFn);
            $sizeItems.on('change', loadFn);
            break;

        case 'shoes':
 /*           var $colorFiltersContainer = $('#colors-filter');
            var $sizeFiltersContainer = $('#size-filter');
            var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming*/

            loadFn = loadShoes;

            // $colorItems.on('change', loadFn);
            // $sizeItems.on('change', loadFn);
            break;

       case 'short':
            var $colorFiltersContainer = $('#colors-filter');
            var $sizeFiltersContainer = $('#size-filter');
            var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]');

            loadFn = loadShorts;

            $colorItems.on('change', loadFn);
            $sizeItems.on('change', loadFn);
            break;

        case 'shuttle':

            loadFn = loadShuttles;

            break;

        case 'bag':
            loadFn = loadBags;

            break;
    }

    $( "#slider-range" ).slider('option', 'change',
         function( event, ui ) {
            loadFn();
        }
    );

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
    });

    $container.on('click', '.add-cart-item.racket', function(ev) {
        ev.preventDefault();
        addRacket($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.bag', function(ev) {
        ev.preventDefault();
        addBag($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.shuttle', function(ev) {
        ev.preventDefault();
        addShuttle($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.jacket', function(ev) {
        ev.preventDefault();
        addJacket($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.short', function(ev) {
        ev.preventDefault();
        addShort($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.shoes', function(ev) {
        ev.preventDefault();
        addShoes($(ev.target).data('id'));
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