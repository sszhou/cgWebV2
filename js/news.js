$(function() {
	var newsScroll = 0;
	const step = 15;
	$("#latestnews").mouseover(function(e) {
		if (e.pageY > $("#latestnews").position().top + 100)
			newsScroll -= step;
		else if (newsScroll < -step)
			newsScroll += step * 1.5;

		$('#latestnews ul').animate({
			marginTop : newsScroll
		});
	});
	$("#latestnews").mouseout(function() {
		$('#latestnews ul').stop();
	});
}); 