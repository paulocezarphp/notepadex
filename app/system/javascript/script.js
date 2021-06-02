$(document).ready(function(){

	$('.item-close').click(function() {

         $(this).parent().parent().hide(2000);

	});

	$('#close-painel').click(function() {

         $('#edite-painel').fadeOut(1000);
         $('.itemedite-background').fadeOut(1000);

	});

});