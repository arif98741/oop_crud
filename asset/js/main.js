$(document).ready(function(){

	$('#dataTable').DataTable();
	
	//registration error/success message	
	$(function(){
		setTimeout(function() {
			$('#message').slideUp('slow');
		}, 3000)
	});
});