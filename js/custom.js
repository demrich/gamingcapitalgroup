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
    
    $("#home-menu").click(function(){
        $(".dropdown-content").slideToggle();
        });

    $("#home-menu").click(function(){
        $("header").toggleClass("show");

    })

    
    
});
/*
function homeMenu() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#home-menu')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
*/