$(function(){


	$('.tabs a').click(function(){
		$(this).parents('.tab-wrap').find('.tab-cont').addClass('hide');
		$(this).parent().siblings().removeClass('active');
		var id = $(this).attr('href');
		$(id).removeClass('hide');
		$(this).parent().addClass('active');
		return false
	});

	$('.accordion__head').on('click', function(){
		var el = $(this);
		el.next('.accordion__body').slideToggle();
		el.toggleClass('open');
		return false;
	});


	$('.toggle-filter').click(function(){
		$(this).toggleClass('active');
		$('.sidebar').toggleClass('open');
		$('.box-product').toggleClass('full');
	})

	$('.toggle-menu').click(function(){
		$(this).toggleClass('active');
		$('.dropdown-content--menu').toggleClass('open');
	})

	$('.styler').styler();

	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 0, 300 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] );
			$( "#amount1" ).val( "$" + ui.values[ 1 ] );
		}
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) );
    $( "#amount1" ).val( "$" + $( "#slider-range" ).slider( "values", 1 ) );
	
	/*let sortItem = document.getElementsByClassName('sort__item'),
		sortWrap = document.getElementsByClassName('sort')[0],
		sortInput = sortWrap.getElementsByTagName('input');

		for(let i = 0; i < sortInput.length; i++) {
			let sortArrow = sortItem[i].getElementsByClassName('icon-arrow-up-down')[0];

			sortInput[i].addEventListener('change', function() {
				
				if( sortInput[i].checked) {
					sortArrow.style.transform = 'rotateX(0deg)';
				} else {
					sortArrow.style.transform = 'rotateX(180deg)';
				}
				this.addEventListener('click', function() {
					console.log(this);
				})


			});
		}*/

		$('.menu__sort').click(function (ev) {
			$('.menu__sort').removeClass('active');
			$(this).addClass('active');
			$('.arrow-up', this).toggleClass('blue'); 
			$('.arrow-down',this).toggleClass('gray');
		});    
		
		
	
});

   



   
   
   
   
   
   
   
   