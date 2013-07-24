$(document).ready(function() {
	var w = 1024;
	var h = 768;
	resizer();
	
	$(window).resize(function() {
		resizer()
	});
	function resizer() {
		h = $(window).height();
		w = $(window).width();
		if (h > $("#wrap").height())
			$("#footer").css("position", "absolute");
		else
			$("#footer").css("position", "relative");
	}


	$('#return').click(function() {
		$('html, body').animate({
			scrollTop : 0
		}, 'slow');
	});

}); 