$(document).ready(function() {       
   var scroll_start = 0;
   var startchange = $('.heroClaim');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $("header").css('background-color', 'rgba(64, 78, 91, 1)');
       } else {
          $('header').css('background-color', 'rgba(64, 78, 91, 0.9)');
       }
   });
    }
    $(document).scroll(function() {
      $('.claimBox').addClass('in-view');
    });
});