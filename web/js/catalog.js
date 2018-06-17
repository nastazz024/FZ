$(function () {
    'use strict';


    $('a.flipper').on('click', function (ev) {
        ev.preventDefault();
        $('.flip').toggleClass('flipped');
        $('.flip').show();
        $('.flip.flipped').hide();
    });



    if  (typeof _layout == 'undefined') {
        return;
    }



    var $cart = $('#cart-container');
    var $container = $('div.content');

    var loadShorts = function () {
        $container.prepend($('#preloader').html());

        var $colorFiltersContainer = $('#colors-filter');
        var $sizeFiltersContainer = $('#size-filter');
        var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
        var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming


        var payload = {};

        // сбор данных фильтра
        var colors = [];
        $.each($colorFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
            colors.push($(el).val());
        });
        payload.colors = colors;


        // todo filter by size
        var size = [];
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
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
        $.post('/product/shorts', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };


    var loadShirts = function () {
        var tmpl = $('#preloader').html();
        $container.prepend(tmpl);

        var $colorFiltersContainer = $('#colors-filter');
        var $sizeFiltersContainer = $('#size-filter');
        var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
        var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming


        var payload = {};

        // сбор данных фильтра
        var colors = [];
        $.each($colorFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
            colors.push($(el).val());
        });
        payload.colors = colors;


        // todo filter by size
        var size = [];
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
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
        $.post('/product/shirts', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
            // end
        });
    };

    var loadRackets = function () {
        $container.prepend($('#preloader').html());

        var $balanceFiltersContainer = $('#balance-filter');
        var $holeFiltersContainer = $('#hole-filter');
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        //
        // todo filter by size
        var balance = [];
        $.each($balanceFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
            balance.push($(el).val());
        });
        payload.balance = balance;

        var hole = [];
        $.each($holeFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
            hole.push($(el).val());
        });
        payload.hole = hole;

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
        $.post('/product/rackets', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };

    var loadRackets_accs = function () {
        $container.prepend($('#preloader').html());
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');


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
        $.post('/product/rackets_accs', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };


    var loadAccss = function () {
        $container.prepend($('#preloader').html());
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');


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
        $.post('/product/accss', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };


    var loadBags = function () {
        $container.prepend($('#preloader').html());
        var $sizeFiltersContainer = $('#size-filter');
        var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming
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

        // todo filter by size
        var size = [];
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
            size.push($(el).val());
        });
        payload.size = size;

        payload.cost = {};
        payload.cost.min = $("#slider-range").slider("values", 0);
        payload.cost.max = $("#slider-range").slider("values", 1);


        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/product/bags', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };

    var loadShuttles = function () {
        $container.prepend($('#preloader').html());
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
        $.post('/product/shuttles', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };

    var loadShoeses = function () {
        $container.prepend($('#preloader').html());
        var $sizeFiltersContainer = $('#size-filter');
        var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        //
        var size = [];
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
            size.push($(el).val());
        });
        payload.size = size;

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
        $.post('/product/shoeses', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };

    var loadJackets = function () {
        $container.prepend($('#preloader').html());
        var $colorFiltersContainer = $('#colors-filter');
        var $sizeFiltersContainer = $('#size-filter');
        var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');
        var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming


        var payload = {};

        // сбор данных фильтра
        var colors = [];
        $.each($colorFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
            colors.push($(el).val());
        });
        payload.colors = colors;


        // todo filter by size
        var size = [];
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function (pos, el) {
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
        $.post('/product/jackets', payload, function (resp) {
            $container.html(resp);
            $('#pr_cnt').text(parseInt($('.box-product .product').length));
        });
    };


    var loadCart = function () {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();
        $.post('/cart', payload, function (resp) {
            $cart.html(resp);
        });
    };

    var addShirt = function (id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.size = size;
        payload.type = 'shirt';

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });
    };

    var addJacket = function (id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.size = size;
        payload.type = 'jacket';

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });
    };

    var addRacket = function (id, balance, hole) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'racket';
        payload.hole = hole;
        payload.balance = balance;

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });

    };

    var addRacket_accs = function (id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'racket_accs';

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });

    };

    var addAccs = function (id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'accs';

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });

    };

    var addShuttle = function (id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'shuttle';

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });

    };

    var addShort = function (id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'short';
        payload.size = size;

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });

    };


    var addShoes = function (id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'shoes';

        payload.size = size;

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });
    };

    var addBag = function (id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'bag';

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });

    };

    var delItem = function (key) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.key = key;

        $.post('/cart/del', payload, function (resp) {
            $cart.html(resp);
        });
    };


    var loadFn = function () {
        console.error('unknown kind')
    };
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

            var $balanceFiltersContainer = $('#balance-filter');
            var $balanceItems = $balanceFiltersContainer.find('input[type="checkbox"]'); /// bad naming
            var $holeFiltersContainer = $('#hole-filter');
            var $holeItems = $holeFiltersContainer.find('input[type="checkbox"]'); /// bad naming
            loadFn = loadRackets;


            $balanceItems.on('change', loadFn);
            $holeItems.on('change', loadFn);
            break;

        case 'racket_accs':

            loadFn = loadRackets_accs;
            break;

        case 'accs':

            loadFn = loadAccss;
            break;

        case 'shoes':
            /* var $colorFiltersContainer = $('#colors-filter');*/
            var $sizeFiltersContainer = $('#size-filter');
            /* var $colorItems = $colorFiltersContainer.find('input[type="checkbox"]');*/
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming*/

            loadFn = loadShoeses;

            //$colorItems.on('change', loadFn);
            $sizeItems.on('change', loadFn);
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
            var $sizeFiltersContainer = $('#size-filter');
            var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]');
            loadFn = loadBags;

            $sizeItems.on('change', loadFn);
            break;
    }

    $("#slider-range").slider('option', 'change',
        function (event, ui) {
            loadFn();
        }
    );

    // переключение вида списка
    $('.filter-list__item a').on('click', function (ev) {
        ev.preventDefault();

        $('.filter-list__item').removeClass('active');
        $(ev.target).parents('li').addClass('active');

        loadFn();
    });


    /**
     * ADD TO CART BUTTONS
     */
    $container.on('click', '.add-cart-item.shirt', function (ev) {
        ev.preventDefault();

        addShirt($(ev.target).data('id'), $(ev.target).parent().find('select').val());
    });

    $container.on('click', '.add-cart-item.racket', function (ev) {
        ev.preventDefault();
        addRacket($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.bag', function (ev) {
        ev.preventDefault();
        addBag($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.shuttle', function (ev) {
        ev.preventDefault();
        addShuttle($(ev.target).data('id'));
    });


    $container.on('click', '.add-cart-item.jacket', function (ev) {
        ev.preventDefault();
        addJacket($(ev.target).data('id'), $(ev.target).parent().find('select').val());
    });

    $container.on('click', '.add-cart-item.short', function (ev) {
        ev.preventDefault();
        addShort($(ev.target).data('id'), $(ev.target).parent().find('select').val());
    });

    $container.on('click', '.add-cart-item.shoes', function (ev) {
        ev.preventDefault();
        addShoes($(ev.target).data('id'), $(ev.target).parent().find('select').val());
    });

    $container.on('click', '.add-cart-item.accs', function (ev) {
        ev.preventDefault();
        addAccs($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.racket_accs', function (ev) {
        ev.preventDefault();
        addRacket_accs($(ev.target).data('id'));
    });

    $cart.on('click', '.js-remove-cart', function (ev) {
        ev.preventDefault();
        delItem($(ev.target).closest('a').data('key'));
        // loadCart();
    });

    $('.menu__sort').click(function () {
        loadFn();
    });

    loadFn();
    loadCart();

    var dropdownTitle = $(".dropdown-content__title");

    for (var i = 0; i < dropdownTitle.length; i++) {
        $(dropdownTitle[i]).on('click', function (ev) {
            dropdownTitle.next().hide();
            $(ev.target).next().show();
        });
    }
/*

    $('.product__photo img').click(function () {
        $('.product__active').toggleClass('d-none');
    });
*/

    $("#accordion").accordion();

    $('#tabs').tabs();


    $('.message a').click(function(ev){
        ev.preventDefault();
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");

        $('.login-page .login-error').remove();
    });


    var addCommon = function (id, type, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.size = size;
        payload.type = type;

        $.post('/cart/add', payload, function (resp) {
            $cart.html(resp);
        });
    };


    $('.size__item').on('click', function(ev) {
        ev.preventDefault();
        var $obj = $(ev.target);
        $obj.parents('ul.size__list').find('.size__item').removeClass('checkd');
        $obj.addClass('checkd');
    });
    $('button.basket__btn').on('click', function(ev) {
        ev.preventDefault();

        var size = null;
        if ($('ul.size__list').length) {
            var $buf = $('ul.size__list').find('.size__item.checkd');
            if ($buf.length) {
                size = $buf.data('id');
            } else {
                return false;
            }
        }
        var type = $('#prd_type').val();
        var id = $('#prd_id').val();


        addCommon(id, type, size);
    });


});






