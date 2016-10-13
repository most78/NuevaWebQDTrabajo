$(document).ready(function() {       
   var scroll_start = 0;
   var startchange = $('.productosBox');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $("header").css('background-color', '#ff0000');
       } else {
          $('header').css('background-color', '#fff');
       }
   });
    }
});