$(function() {
	var vidSrc = "";
	var imgSrc = "";

	$("#gallery .fullview").hide();
	$("#gallery #play").hide();

	$("#gallery .fullview").css("margin-left", w * 0.5 - 450);

	$("#gallery .batch").hover(function() {
		var expose = 100;
		if ($(this).find(".thumbs img").length > 4)
			expose = 200;
		$(this).find(".thumbs").stop().delay(500).animate({
			height : expose
		});
	}, function() {
		$(this).find(".thumbs").stop().delay(500).animate({
			height : 50
		});
	});

	$("#gallery .thumbs .view.pic").mouseover(function() {
		var src = $(this).find("a").attr("src");
		$("#gallery #preview img").attr("src", src);
		$("#gallery #preview p").html($(this).find("p").html());
		if (src != imgSrc) {
			imgSrc = src;
			$("#gallery .fullview img").attr('src', src);
		}
		$("#gallery #play").hide();

		$("#gallery .thumbs .view.pic a").click(function() {
			$("#gallery .fullview p").html($(this).attr("alt"));
			$("#gallery .fullview img").show();
			$("#gallery .fullview iframe").hide();
			showFullView();
		});

	$("#gallery #close").click(function() {
		hideFullView();
	});
	});

	$("#gallery .thumbs .view.vid").mouseenter(function() {
		var src = $(this).find("a").attr("src");
		$("#gallery #preview img").attr("src", src);
		$("#gallery #preview p").html($(this).find("p").html());

		$("#gallery #play").show();

		src = "http://player.vimeo.com/video/" + $(this).find("a").attr("id") + "?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff";
		if (src != vidSrc) {
			vidSrc = src;
			$("#gallery iframe").attr('src', src);
			$("#gallery .fullview p").html($(this).find("a").attr("title"));
		}
		$("#gallery .thumbs .view.vid a").click(function() {
			showFullvid();
		});

		$("#gallery #play").click(function() {
			showFullvid();
		});

	$("#gallery #close").click(function() {
		hideFullView();
	});
	});

	function showFullvid() {
		$("#gallery .fullview img").hide();
		$("#gallery .fullview iframe").show();
		$("#gallery .fullview p").html($(this).attr("alt"));
		showFullView();
	}

});
function showFullView() {
	$("#gallery .fullview").show();
	$("#gallery #featured_works, #gallery #preview").css("opacity", 0.2);
}

function hideFullView() {
	$("#gallery .fullview").hide();
	$("#gallery #featured_works, #gallery #preview").css("opacity", 1);
}