
$(document).ready(function(){
	$('.quess').click(function(e) {
	    e.preventDefault();  
	    $(".quess").removeClass('active');
	    
	    var $this = $(this); 
	    if ($this.next().hasClass('active')) {
	        $this.removeClass('active');
	        $('.answer').removeClass('active'); 
	        $this.next().slideUp(350).removeClass('active');
	    } else {
	        $('.answer').slideUp(300).removeClass('active'); 
	        $this.toggleClass('active');
	        $this.addClass('active');
	        $this.next().slideToggle(350).addClass('active');  
	    }
	});

	$('.icon-audio a').click(function(e) {
	    e.preventDefault();  
	    $(this).toggleClass('active');
	});

	$('.btn-bar a').click(function(e) {
	    e.preventDefault();  
	    $('.h-menu, html').addClass('open_menu');
	});

	$('.close-menu a').click(function(e) {
	    e.preventDefault();  
	    $('.h-menu, html').removeClass('open_menu');
	});

	$(window).bind('scroll', function() {
        var navHeight = $( window ).height();
         if ($(window).scrollTop() > 1) {
             $('.header-menu').addClass('fixed-menu'); 
         }
         else {
             $('.header-menu').removeClass('fixed-menu');
         }
    });

    $('.slide-result').slick({
        autoplay:true,
        autoplaySpeed: 5000, 
        arrow:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: true, 
        // infinite: false, 
        speed: 300,
    });

    $('.slide-result').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	    if ($('.slide-last').hasClass('slick-current')) {
	    	// alert(123); 
	    	$('.result-step').hide();
	    	$('.result-end').show();
	    }
	}).trigger('beforeChange');

    AOS.init({ 
    	disable: 'mobile',
	 	duration: 1200, 
	});
})

 