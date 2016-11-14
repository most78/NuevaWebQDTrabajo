$(document).ready(function() {
    checkSize();
    $(window).resize(checkSize);
    $('.table-button-menu li').click(function(e){
    	e.preventDefault();
    	$('.table-button-menu li').removeClass("active");
    	$(this).addClass("active");
    	if($('.table-button-menu').find('li:nth-child(2)').hasClass('active'))
		{
   			$("table td:nth-child(even)").css('display', 'none');
   			$("table td:nth-child(3)").css('display', 'table-cell'); 
		}else if($('.table-button-menu').find('li:nth-child(3)').hasClass('active')){
			$("table td:nth-child(2)").css('display', 'none');
			$("table td:nth-child(3)").css('display', 'none');
			$("table td:nth-child(4)").css('display', 'table-cell');	
		}
		else{
			$("table td:nth-child(n+3)").css('display', 'none');
			$("table td:nth-child(2)").css('display', 'table-cell');
		}
	});
	$( function() {
    	$( "#accordion" ).accordion({
      	collapsible: true
    	});
  	});
});
function checkSize(){
    if ($("table tr:nth-last-child(2) td:first-child").css("display") == "none" ){
        	$('table tr:last-child td:first-child').css("display","none");
        	$('table tr:nth-last-child(2) td').attr("colspan",2);
        	$('table tr:last-child td').attr("colspan",2);
        	$('.serviceCategories').parent().attr('id', 'accordion');
    }
}
