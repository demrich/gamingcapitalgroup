$(document).ready(function(){       
    var scroll_start = 0;
    var startchange = $('#start');
    var offset = startchange.offset();
    $(document).scroll(function() { 
       scroll_start = $(this).scrollTop();
       if(scroll_start > offset.top) {
           $('header').addClass('show-scroll');
        } else {
            $('header').removeClass('show-scroll');
        }
    });
    
    $("#home-menu",).click(function(){
        $('nav').fadeOut();
        $(".dropdown-content").slideToggle('swing');
        });

    $(".close",).click(function(){
        $('nav').fadeIn('slow');
        $(".dropdown-content").slideToggle('swing');
        });

        /*  Woah there partner

    $("#home-menu").click(function(){
        $("header").toggleClass("show");

    });
        */

    
    
});
