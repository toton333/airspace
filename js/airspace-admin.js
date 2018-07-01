jQuery( document ).ready(function($) {
	$('#customize-control-ideas_image').hide();
	$('.airspacecollapsible').click(function(e){
		e.preventDefault();
       //this.classList.toggle("servicesactive");
       $(this).toggleClass('airspaceactive');
       $(this).parent().parent().next().toggle('slow');

        //$('#customize-control-services_title').toggle('slow');
	});
});
