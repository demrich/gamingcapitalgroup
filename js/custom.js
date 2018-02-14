$(document).ready(function(){       
    var scroll_start = 0;
    var startchange = $('#start');
    var offset = startchange.offset();
    $(document).scroll(function() { 
       scroll_start = $(this).scrollTop();
       if(scroll_start > offset.top) {
           $('header').css('background-color', 'rgba(0, 0, 0, 1)');
        } else {
           $('header').css('background-color', 'rgba(0, 0, 0, 0)');
        }
    })
});