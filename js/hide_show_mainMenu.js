$(document).ready(function() { 
	$('.menu-toggle').click(function(){
  		if ( $('.fadeInRight').css('visibility') == 'hidden' )
    		$('.fadeInRight').css('visibility','visible');
  		else
    		$('.fadeInRight').css('visibility','hidden');
	});
});