$(window).scroll(function(){
	if(window.scrollY >= 100){
		$('header').addClass('showHeaderScroll');
	} else {
		$('header').removeClass('showHeaderScroll');
	}
});

function sendEmail(event, id){
    
    event.preventDefault();

	var modal = document.querySelector('#btnSuccess');
	var form = $('#formContact'+id);

	console.log(form.serialize());
	
	modal.click();


	$.ajax({

		type: 'post',
		url: 'php/email.php',
		dataType: 'json',
		data: form.serialize(),
	

	}).fail(function(resp){

		console.log(resp);

	}).done(function(resp){

		console.log(resp);
		
	}).always(function(resp){
		console.log(resp);
	});
	
	

};