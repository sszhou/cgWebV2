 $(document).ready(function(){
    	resizer()
    });
$(window).resize(function(){
    	resizer()
    });
function resizer()
{
	if($(window).height() > $("#wrap").height())
	    	$("#footer").css("position","absolute");
	    else
    		$("#footer").css("position","relative");
}

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