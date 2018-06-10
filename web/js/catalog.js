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
        var $balanceFiltersContainer = $('#balance-filter');
        var $holeFiltersContainer = $('#hole-filter');
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        //
        // todo filter by size
        var balance = [];
        $.each($balanceFiltersContainer.find('input[type="checkbox"]:checked'), function(pos, el) {
            balance.push($(el).val());
        });
        payload.balance = balance;

        var hole = [];
        $.each($holeFiltersContainer.find('input[type="checkbox"]:checked'), function(pos, el) {
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
        $.post('/product/rackets', payload, function(resp) {
            $container.html(resp);
        });
    };

    var loadRackets_accs = function () {
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
        $.post('/product/rackets_accs', payload, function(resp) {
            $container.html(resp);
        });
    };


    var loadAccss = function () {
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
        $.post('/product/accss', payload, function(resp) {
            $container.html(resp);
        });
    };



    var loadBags = function () {
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
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function(pos, el) {
            size.push($(el).val());
        });
        payload.size = size;

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

    var loadShoeses = function () {
        var $sizeFiltersContainer = $('#size-filter');
        var $sizeItems = $sizeFiltersContainer.find('input[type="checkbox"]'); /// bad naming
        var payload = {};

        // сбор данных фильтра
        //вид
        payload.view = $('.filter-list__item.active a').data('type');

        //
        var size = [];
        $.each($sizeFiltersContainer.find('input[type="checkbox"]:checked'), function(pos, el) {
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

    var addRacket = function(id,balance,hole) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'racket';
        payload.hole = hole;
        payload.balance = balance;

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });

    };

    var addRacket_accs = function(id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'racket_accs';

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });

    };

    var addAccs = function(id) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'accs';

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

    var addShort = function(id, size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'short';
        payload.size = size;

        $.post('/cart/add', payload, function(resp) {
            $cart.html(resp);
        });

    };


    var addShoes = function(id,size) {
        var payload = {};
        var csrfParam = yii.getCsrfParam();
        payload[csrfParam] = yii.getCsrfToken();

        payload.id = id;
        payload.type = 'shoes';

        payload.size = size;

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


    /**
     * ADD TO CART BUTTONS
     */
    $container.on('click', '.add-cart-item.shirt', function(ev) {
        ev.preventDefault();

        addShirt($(ev.target).data('id'), $(ev.target).parent().find('select').val());
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
        addJacket($(ev.target).data('id'), $(ev.target).parent().find('select').val());
    });

    $container.on('click', '.add-cart-item.short', function(ev) {
        ev.preventDefault();
        addShort($(ev.target).data('id'), $(ev.target).parent().find('select').val());
    });

    $container.on('click', '.add-cart-item.shoes', function(ev) {
        ev.preventDefault();
        addShoes($(ev.target).data('id'), $(ev.target).parent().find('select').val());
    });

    $container.on('click', '.add-cart-item.accs', function(ev) {
        ev.preventDefault();
        addAccs($(ev.target).data('id'));
    });

    $container.on('click', '.add-cart-item.racket_accs', function(ev) {
        ev.preventDefault();
        addRacket_accs($(ev.target).data('id'));
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

    var dropdownTitle = document.getElementsByClassName("dropdown-content__title");

    for(var i = 0; i < dropdownTitle.length; i++) {
        dropdownTitle[i].addEventListener('click', function() {
            dropdownTitle[i].next().addClass('dNone');
        })
    }

    $(document).ready(function(){
        $('.product__photo img').click(function () {
            $('.product__active').toggleClass('d-none');
        });

        $( "#accordion" ).accordion();

        $('#tabs').tabs();

    });














    var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

    function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

// https://dribbble.com/shots/2658222

    var pathLength = 39;

    var BtnGroup = function () {
        function BtnGroup(group) {
            var _this = this;

            _classCallCheck(this, BtnGroup);

            this.buttonSpacing = 20;
            this.group = group;
            this.buttons = Array.prototype.slice.call(this.group.querySelectorAll('.btn'));
            this.slides = Array.prototype.slice.call(document.querySelectorAll('.slide'));
            this.slideContainer = document.querySelector('.slides');
            this.slideContainer.style.width = this.slides.length + '00vw';
            this.svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            this.svg.setAttribute('viewbox', '0 0 ' + this.buttonSpacing * this.buttons.length + ' 16');
            this.path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            this.path.classList.add('line');
            this.currentPath = 'M ' + -this.buttonSpacing / 2 + ', 14';
            this.currentIndex = -1;
            this.activateIndex(this.buttons.indexOf(this.group.querySelector('.active')));
            this.group.appendChild(this.svg);
            this.svg.appendChild(this.path);
            this.refreshPath();
            this.initButtons();

            var _iteratorNormalCompletion = true;
            var _didIteratorError = false;
            var _iteratorError = undefined;

            try {
                for (var _iterator = this.buttons[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                    var button = _step.value;

                    button.addEventListener('click', function (e) {
                        return _this.onClick(e);
                    });
                }
            } catch (err) {
                _didIteratorError = true;
                _iteratorError = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion && _iterator.return) {
                        _iterator.return();
                    }
                } finally {
                    if (_didIteratorError) {
                        throw _iteratorError;
                    }
                }
            }
        }

        _createClass(BtnGroup, [{
            key: 'initButtons',
            value: function initButtons() {
                for (var i = 0; i < this.buttons.length; i++) {
                    var center = this.center(i);
                    var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                    var pathStr = '';
                    pathStr += 'M' + center + ', 14 ';
                    pathStr += 'C' + (center + 3) + ', 14 ';
                    pathStr += center + 6 + ', 11 ';
                    pathStr += center + 6 + ',  8 ';
                    pathStr += 'C' + (center + 6) + ',  5 ';
                    pathStr += center + 3 + ',  2 ';
                    pathStr += center + ',  2 ';
                    pathStr += 'C' + (center - 3) + ',  2 ';
                    pathStr += center - 6 + ',  5 ';
                    pathStr += center - 6 + ',  8 ';
                    pathStr += 'C' + (center - 6) + ', 11 ';
                    pathStr += center - 3 + ', 14 ';
                    pathStr += center + ', 14 ';
                    path.setAttributeNS(null, 'd', pathStr);
                    path.classList.add('circle');
                }
            }
        }, {
            key: 'onClick',
            value: function onClick(e) {
                var index = this.buttons.indexOf(e.srcElement || e.target);
                this.activateIndex(index);
            }
        }, {
            key: 'refreshPath',
            value: function refreshPath() {
                this.path.setAttributeNS(null, 'd', this.currentPath);
                this.path.style.strokeDashoffset = (-this.path.getTotalLength() + pathLength) * 0.9965;
            }
        }, {
            key: 'center',
            value: function center(index) {
                return index * this.buttonSpacing + this.buttonSpacing / 2;
            }
        }, {
            key: 'removeClass',
            value: function removeClass(str) {
                if (this.buttons[this.currentIndex]) {
                    this.buttons[this.currentIndex].classList.remove(str);
                }
            }
        }, {
            key: 'addClass',
            value: function addClass(str) {
                if (this.buttons[this.currentIndex]) {
                    this.buttons[this.currentIndex].classList.add(str);
                }
            }
        }, {
            key: 'activateIndex',
            value: function activateIndex(index) {
                this.slideContainer.style.left = -index + '00vw';
                var lastCenter = this.center(this.currentIndex);
                var nextCenter = this.center(index);
                var offset = 0;
                var sign = index < this.currentIndex ? -1 : 1;
                this.currentPath += 'C' + (lastCenter + sign * 3) + ', 14 ';
                this.currentPath += lastCenter + sign * 6 + ', 11 ';
                this.currentPath += lastCenter + sign * 6 + ',  8 ';
                this.currentPath += 'C' + (lastCenter + sign * 6) + ',  5 ';
                this.currentPath += lastCenter + sign * 3 + ',  2 ';
                this.currentPath += lastCenter + ',  2 ';
                this.currentPath += 'C' + (lastCenter - sign * 3) + ',  2 ';
                this.currentPath += lastCenter - sign * 6 + ',  5 ';
                this.currentPath += lastCenter - sign * 6 + ',  8 ';
                this.currentPath += 'C' + (lastCenter - sign * 6) + ', 11 ';
                this.currentPath += lastCenter - sign * 3 + ', 14 ';
                this.currentPath += lastCenter + ', 14 ';
                this.currentPath += 'L' + nextCenter + ', 14 ';
                this.currentPath += 'C' + (nextCenter + sign * 3) + ', 14 ';
                this.currentPath += nextCenter + sign * 6 + ', 11 ';
                this.currentPath += nextCenter + sign * 6 + ',  8 ';
                this.currentPath += 'C' + (nextCenter + sign * 6) + ',  5 ';
                this.currentPath += nextCenter + sign * 3 + ',  2 ';
                this.currentPath += nextCenter + ',  2 ';
                this.currentPath += 'C' + (nextCenter - sign * 3) + ',  2 ';
                this.currentPath += nextCenter - sign * 6 + ',  5 ';
                this.currentPath += nextCenter - sign * 6 + ',  8 ';
                this.currentPath += 'C' + (nextCenter - sign * 6) + ', 11 ';
                this.currentPath += nextCenter - sign * 3 + ', 14 ';
                this.currentPath += nextCenter + ', 14 ';
                this.removeClass('active');
                this.currentIndex = index;
                this.addClass('active');
                this.refreshPath();
            }
        }]);

        return BtnGroup;
    }();

    var groups = Array.prototype.slice.call(document.querySelectorAll('.btn-group'));

    var _iteratorNormalCompletion2 = true;
    var _didIteratorError2 = false;
    var _iteratorError2 = undefined;

    try {
        for (var _iterator2 = groups[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
            var group = _step2.value;

            console.log(new BtnGroup(group));
        }
    } catch (err) {
        _didIteratorError2 = true;
        _iteratorError2 = err;
    } finally {
        try {
            if (!_iteratorNormalCompletion2 && _iterator2.return) {
                _iterator2.return();
            }
        } finally {
            if (_didIteratorError2) {
                throw _iteratorError2;
            }
        }
    }
});



