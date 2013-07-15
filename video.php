<?php include('header.php'); ?>

<script type="text/javascript">
     $(window).load(function() {
		var videolink = "http://player.vimeo.com/video/61690605?byline=0&amp;portrait=0&amp;color=ffffff";
		var personlink ="http://scribblethink.org/";
		var speaker = "JP Lewis";
		var h2 = "Accelerating Animation with Machine Learning";
		var date = "May 31 2011";
		var discription = "JP Lewis from Weta Digital and also a senior lecturer in the School of Design gave a seminar on Accelerating Animation with Machine Learning as part of the Victoria University and Weta Digital Computer Graphics Lecture Series.";
		
		$("#dodgson").click(function ()
		{
			personlink = "http://www.cl.cam.ac.uk/~nad10/";
			h2 = "Multi-View Autoscopic 3D Displays";
			speaker = "Neil Dodgson";
			date ="March 29 2011";
			discription ="Neil Dodgson is Professor of Graphics & Imaging at the University of Cambridge and Deputy Head of the Computer Laboratory. Dr Dodgson's research interests are in computer graphics, 3D display technology, and image processing. His recent research has focussed on subdivision surfaces and aesthetic imaging. He is a member of both ACM SIGGRAPH and Eurographics.";
			update();
		});
		$("#bridson").click(function ()
		{
			videolink = "http://player.vimeo.com/video/55993879?byline=0&amp;portrait=0&amp;color=ffffff";
			personlink = "http://www.cs.ubc.ca/~rbridson/";
			h2 = "Tracking Liquid Geometry";
			speaker = "Robert Bridson";
			discription ="Robert Bridson is associate professor in the Imager and SCL labs, at the University of British Columbia, Department of Computer Science. <a id='bridsonA'>Wacth the part 2 of of his talk from here</a>.";
			date = " April 5 2011";
			update();
		});
		$("#bridsonA").click(function ()
		{
			console.log("clicked");
			videolink = "http://player.vimeo.com/video/55993879?byline=0&amp;portrait=0&amp;color=ffffff";
			discription ="Robert Bridson is associate professor in the Imager and SCL labs, at the University of British Columbia, Department of Computer Science. <br/>Wacth the part 1 of of his talk from <a id='bridsonB'>here</a>.";
			update();
		});
		$("#bridsonB").click(function ()
		{
			videolink = "http://player.vimeo.com/video/55993879?byline=0&amp;portrait=0&amp;color=ffffff";
			discription ="Robert Bridson is associate professor in the Imager and SCL labs, at the University of British Columbia, Department of Computer Science. <br/>Wacth the part 2 of of his talk from <span id='bridsonA'>here</span>.";
			update();
		});
		$("#grinspun").click(function ()
		{
			videolink = "http://player.vimeo.com/video/55993879?byline=0&amp;portrait=0&amp;color=ffffff";
			personlink = "http://www.cs.columbia.edu/~eitan/";
			h2 = "Animating Physics for Cinema";
			speaker = "Eitan Grinspun";
			discription ="Professor Grinspun directs the Columbia Computer Graphics Group. The technologies developed by Grinspun’s lab are used today at major film studios for motion pictures such as Disney’s Tangled and Twentieth Century Fox’s Rise of the Planets of the Apes, and in popular consumer software such as Photoshop and Illustrator.";
			date = "May 5 2011";
			update();
		});
		$("#fascionen").click(function ()
		{
			videolink = "http://player.vimeo.com/video/61685547?byline=0&amp;portrait=0&amp;color=ffffff";
			personlink = "http://www.linkedin.com/pub/luca-fascione/0/211/b3b";
			h2 = "Rendering and Pipelines";
			speaker = "Luca Fascionen";
			discription ="Luca Fascione leads the Rendering branch of Weta Digital's Research group. Main area of focus for the group are high performance rendering, advanced material modeling, light transport algorithms, and geometric representation and compression.";
			date = "May 19 2011";
			update();
		});
		$("#lewis").click(function ()
		{
			videolink = "http://player.vimeo.com/video/61690605?byline=0&amp;portrait=0&amp;color=ffffff" ;
			personlink = "http://scribblethink.org/";
			h2 = "Accelerating Animation with Machine Learning";
			speaker = "JP Lewis";
			discription ="JP Lewis is a senior researcher at Weta Digital and also a senior lecturer in the School of Design.";
			date = "May 31 2011";
			update();
		});
		$("#letteri").click(function ()
		{
			videolink = "http://player.vimeo.com/video/60414897?byline=0&amp;portrait=0&amp;color=ffffff";
			personlink = "http://www.imdb.com/name/nm0504784/";
			h2 = "Insights Into Special Effects In Rise of the Planet of the Apes";
			speaker = "Joe Letteri";
			discription ="Joe Letteri is a senior visual effects artist, winner of four Academy awards, four BAFTA awards and four VES awards. He is the current Director of the Academy Award-winning Weta Digital, having joined the company in 2001.";
			date= "Aug 17 2011";
			update();
		});
		function update()
		{
			$(".mainvideo iframe").attr("src",videolink);
			$(".mainvideo .discription h2").text(h2);
			$(".mainvideo .discription .speaker a").text(speaker);
			$(".mainvideo .discription .speaker a").attr("href",personlink);			
			$(".mainvideo .discription .speaker .date").text(date);
			$(".mainvideo .discription .intro").html(discription);
		}
     });
</script>
	
	 <div class="videoplaylist">
         <div id="weta_lecture_series">
			<h2>Victoria University and Weta Digital<br/><span>Computer Graphics Lecture Series</span></h2>
		</div>
		 <div class ="mainvideo">
			<div class ="video_crop">
				<iframe src="http://player.vimeo.com/video/60414897?byline=0&amp;portrait=0&amp;color=ffffff" width="820" height="461" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
			<div class ="discription">
				<h2>Insights Into Special Effects In Rise of the Planet of the Apes</h2>
				<p class = "speaker">Speaker: <a href ="http://www.imdb.com/name/nm0504784/">Joe Letteri</a> <span class="date">Aug 17 20111</span></p>
				<p class="intro">
					Joe Letteri is a senior visual effects artist, winner of four Academy awards, four BAFTA awards and four VES awards. He is the current Director of the Academy Award-winning Weta Digital, having joined the company in 2001.
				</P>
			</div>
		 </div>
		 <div class ="playlist">
			<div class ="single_video" id ="dodgson">
				<div class ="frame_crop">
					<img src ="images\weta_lecture\dodgson.jpg"/>
				</div>				
				<h4>Multi-View Autoscopic 3D Displays</h4>
				<p class="speaker">Neil Dodgson</p>
			</div>
			<div class ="single_video" id ="bridson">
				<div class ="frame_crop">
					<img src ="images\weta_lecture\bridson.jpg"/>
				</div>
				<h4>Tracking Liquid Geometry</h4>
				<p class="speaker">Robert Bridson</p>
			</div>
			<div class ="single_video" id = "grinspun">
				<div class ="frame_crop">
					<img src ="images\weta_lecture\grinspun.jpg"/>
				</div>
				<h4>Animating Physics for Cinema</h4>
				<p class="speaker">Eitan Grinspun</p>				
			</div>
			<div class ="single_video" id = "fascionen">
				<div class ="frame_crop">
					<img src ="images\weta_lecture\fascione.jpg"/>
				</div>
				<h4>Rendering and Pipelines</h4>
				<p class="speaker">Luca Fascione</p>				
			</div>
			<div class ="single_video" id ="lewis">
				<div class ="frame_crop">
					<img src ="images\weta_lecture\lewis.jpg"/>
				</div>
				<h4>Accelerating Animation with Machine Learning</h4>
				<p class="speaker">JP Lewis</p>				
			</div>
			<div class ="single_video" id ="letteri">
				<div class ="frame_crop">
					<img src ="images\weta_lecture\letteri.jpg"/>
				</div>
				<h4>Insights Into Special Effects In Rise of the Planet of the Apes</h4p>
				<p class="speaker">Joe Letteri</p>				
			</div>
		 </div>
         

    </div>   

	<?php include('footer.php'); ?>
