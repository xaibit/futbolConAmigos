$(document).ready(function() {	
	$('#pendingNumber').text($('#pending-list .pending').length);
	
	/*$('#usergroup-form .btn-approve').delegate('click',function(e){
		setTimeout(function() { $('#pendingNumber').text($('#pending-list .pending').length); }, 5000);			
	});*/
	window.setInterval(function(){
		$('#pendingNumber').text($('#pending-list .pending').length);
	}, 1000);

});	