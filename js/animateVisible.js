$(document).ready(function() {
    $('.macBackground,.trabajaConNosotros').addClass("invisible").viewportChecker({
    	classToAdd: 'visible animated fadeInLeft',
        offset: 400
       });
    $('.contenedorProducto').addClass("invisible").viewportChecker({
    	classToAdd: 'visible animated fadeInRight',
        offset: 500
       });
    $('.lastPostContainer').addClass("invisible").viewportChecker({
    	classToAdd: 'visible animated fadeIn',
        offset: 300
       });
});