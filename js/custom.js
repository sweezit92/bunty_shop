$(function() {
    "use strict"; 

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').on('click', function(e) {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    
    $('#back-to-top').tooltip('show');

    var header = $(".header");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100 && $(this).width() > 769) {
            header.addClass("navbar-fixed-top");
        } else {
            header.removeClass('navbar-fixed-top');
        }
    }); 

    var $searchlink = $('#searchlink');

    $searchlink.on('click', function(e){
        var target = e ? e.target : window.event.srcElement;

        if($(target).attr('id') == 'searchlink') {
            if($(this).hasClass('open')) {
              $(this).removeClass('open');
            } else {
              $(this).addClass('open');
            }
        }
    });

    // -------------------------------------------------------------
    //  Owl Carousel Slider ONE
    // -------------------------------------------------------------

    $("#slider_one").owlCarousel({
        items:4,
        margin:20,
        nav:false,
        autoplay:false,
       
        autoplayHoverPause:true,
     
        loop:true,
        navText: [
         "<i class='fa fa-arrow-circle-left'></i>",
          "<i class='fa fa-arrow-circle-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,
                slideBy:1
            },
            480: {
                items: 1,
                slideBy:1
            },
            991: {
                items: 2,
                slideBy:2,
                loop:true,
                 dots:true,
            },
            1000: {
                items: 2,
                slideBy:2,
                loop:true,
            },
        }            

    });
        
    // -------------------------------------------------------------
    //  Owl Carousel Slider TWO
    // -------------------------------------------------------------

    $("#slider_two").owlCarousel({
        items:3,
        margin:20,
        nav:true,
        autoplay:false,
        loop:true,
        autoplayHoverPause:true,
        nav:false,
        pagination:true,
        navText: [
           "<i class='fa fa-arrow-circle-left'></i>",
          "<i class='fa fa-arrow-circle-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,
                slideBy:1
                
                
            },
            500: {
                items: 1,
                slideBy:1
            },
            991: {
                items: 2,
                slideBy:2,
                loop:true,
                dots:true,
            },
            1200: {
                items: 2,
                slideBy:2,
                loop:true,
                
            },
        }            

    });

    $(".testimonial-carousel").owlCarousel({
        items:1,
        autoplay:true,
        autoplayHoverPause:true
    });
        
    // -------------------------------------------------------------
    //  Owl Carousel product_slider
    // -------------------------------------------------------------
    $("#product_slider").owlCarousel({
        items:3,
        margin:5,
        nav:true,
        autoplay:false,
        loop:true,
        autoplayHoverPause:true,
        nav:true,
        navText: [
           "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
        ],
        responsive: {
            0: {
                items: 3,
                slideBy:3
                
                
            },
            500: {
                items: 4,
                slideBy:4
            },
            991: {
                items: 4,
                slideBy:4,
                loop:true,
                dots:true,
            },
            1200: {
                items: 5,
                slideBy:5,
                loop:true,
                
            },
        }            

    });
        
    // -------------------------------------------------------------
    //  Owl Carousel datile_slider
    // -------------------------------------------------------------
    $("#datile_slider").owlCarousel({
        items:3,
        margin:0,
        nav:true,
        autoplay:true,
        loop:true,
        autoplayHoverPause:true,
        nav:true,
        navText: [
           "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,
                slideBy:1
                
                
            },
            500: {
                items: 1,
                slideBy:1
            },
            991: {
                items: 2,
                slideBy:2,
                loop:true,
                dots:true,
            },
            1200: {
                items: 3,
                slideBy:3,
                loop:true,
                
            },
        }            

    });
});