$(document).ready(function() {	
	$('#pendingNumber').text($('#pending-list .pending').length);

	window.setInterval(function(){
		$('#pendingNumber').text($('#pending-list .pending').length);
	}, 1000);

});	