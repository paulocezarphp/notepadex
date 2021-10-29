$(document).ready(function(){

	$('.item-close').click(function() {

         $(this).parent().parent().parent().hide(1000);
         
	});

	$('.item-edite').click(function() {

         $('#edite-painel').fadeIn(500);
         $('.itemedite-background').fadeIn(500);
         
         var edite_title = "" + $(this).parent().parent().parent().children().children().children(".container-item-title-text").text();
         var edite_context = "" + $(this).parent().parent().parent().children(".container-item-context").text();
         $('#edite-title').val(edite_title.trim());
         $('#edite-context').val(edite_context.trim());

	});

	$('#close-painel').click(function() {

         $('#edite-painel').fadeOut(500);
         $('.itemedite-background').fadeOut(500);

	});

});