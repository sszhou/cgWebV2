var w = 1024;
var h = 768;

$(document).ready(function(){
    	resizer()
    });
$(window).resize(function(){
    	resizer()
    });
function resizer()
{
	h = $(window).height();
	w = $(window).width();
	if( h > $("#wrap").height())
	    	$("#footer").css("position","absolute");
	    else
    		$("#footer").css("position","relative");
}
$('#return').click(function(){
			$('html, body').animate({ scrollTop: 0 }, 'slow');
		});
var newsScroll = 0;
const step = 15;
 $("#latestnews").mouseover(function(e) {  
 	if(e.pageY > $("#latestnews").position().top+100)
     	newsScroll-=step;
    else if(newsScroll < -step)
   		newsScroll+=step*1.5;
   		
         $('#latestnews ul').animate
         ({
         	marginTop:newsScroll
         });
   });
    $("#latestnews").mouseout(function() {     	
         $('#latestnews ul').stop();
   });
  // <iframe class="vids"src="http://vimeo.com/62297998" width="820" height="461" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

$("#gallery .batch").hover
(	function(){
	var expose = 100;
	if($(this).find(".thumbs img").length > 4)
		expose = 200;	
	$(this).find(".thumbs").stop().delay(500).animate({height:expose});
	},
	function(){
		$(this).find(".thumbs").stop().delay(500).animate({height:50});
	}
);
$("#gallery .thumbs .view").mousemove(function(e) { 
	
	var src = $(this).find("a").attr("href");	
	$("#gallery #fullpic img").attr("src",src);
	$("#gallery #fullpic p").html($(this).find("p").html());
	
	
	/*
 	if(e.pageX <= w*0.5)
 	{
 		$("#gallery #fullpic").css({"left":10,"right":"auto","width":w*0.5-420});
 	}
    else
   		$("#gallery #fullpic").css({"right":10,"left":"auto","width":w*0.5-420});
   		*/
 	
   });