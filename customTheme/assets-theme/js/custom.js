/*--------------------- Copyright (c) 2023 -----------------------
[Master Javascript]
Project: Dutech Solution Pvt Ltd
Version: 1.0.0
-------------------------------------------------------------------*/
(function($){
    "use strict";
  
    // Ready Function
    jQuery(document).ready(function($){
        var $this = $(window);

        // Menu toggle
        $('.dts_menu_icon').on('click',function () {
            $('.dts_menu>ul').toggleClass('clicked');
        });

        // Fixed Header
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 200) {
                $('.dts_header_wrap').addClass('fixed');
            }
            else {
                $('.dts_header_wrap').removeClass('fixed');
            }
        });

        // Index Main Slider 
        $('.dts_home_slider').owlCarousel({
            loop:true,
            margin:10,
            dots:true,
            nav:true,
            mouseDrag:false,
            autoplayTimeout:4000,
            autoplay:true,
            animateOut: 'slideOutUp',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        // Companies Slider
        $('.dts_testimonial_slider').owlCarousel({
            loop:true,
            margin:30,
            center: false,
            autoplayTimeout:4000,
            nav:false,
            dots:false,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });

        // AOS Animation
        AOS.init({
            duration: 1200,
        });

        // Back to Top
        $(window).scroll(function(){ 
            if ($(this).scrollTop() > 100) { 
                $('#scroll').fadeIn(); 
            } else { 
                $('#scroll').fadeOut(); 
            } 
        }); 
        $('#scroll').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }, 0); 
            return false; 
        }); 

    });
})();