<?php include('header.php'); ?>
<link rel="stylesheet" href="css/orbit-1.2.3.css">
<link rel="stylesheet" type="text/css" href="css/indexstyle.css" />
<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="js/news.js"></script>
        

<script type="text/javascript">
     $(window).load(function() {     

         $('#featured').orbit();
         
     });
</script>
	<div id="slideshow">
	    <div id="featured" >
					<img id="image_1" src="images/showreel/rhee_face.jpg" data-caption="#htmlCaption1" width="1000" height="400"/>
                    <img id="image_2" src="images/showreel/frances_post_vandalism.jpg" data-caption="#htmlCaption2" width="1000" height="400"/>
					<img id="image_3" src="images/showreel/jp_Direct_Manipulation_Blendshapes.jpg" data-caption="#htmlCaption3" width="1000" height="400"/>
                   	<img id="image_4" src="images/showreel/callus_zobeide.jpg" data-caption="#htmlCaption4" width="1000" height="400"/>
                    <img id="image_5" src="images/showreel/ben_dudson.png" data-caption="#htmlCaption5" width="1000" height="400"/>
		</div>
						
		<div class="orbit-caption" id="htmlCaption1">
				<h1>FEATURED RESEARCH </h1>			
				<div class ="discription">
					<a href="rhee.php">
					<P class="title">Human body modeling and animation</p>
					<p class = "author">Taeyhun Rhee</p>
					<p>Real-time facial animation from live video tracking; a complete pipe-line for producing real-time facial expressions of a 3D virtual avatar controlled by an actor's live performances captured by a web cam. </p>
					</a>
				</div>
			</div>
		<div class="orbit-caption" id="htmlCaption2"> 
			<h1>FEATURED PROJECT</h1>
				<div class ="discription">
					<a href ="http://schoolofdesign.ac.nz/sod/portfolio/project.php?id=1129">
					<P class="title">Post-Vandalism</p>						
					<p>MDDN311 | Project 1: Tag Wellington</p>
					<p class = "author">Maurizio Frances</p>
					<p>Though the relationship between the often elitist world of art and graffiti culture is still uneasy, has it finally been accepted as a legitimate form of artistic expression?</p>
					</a>
				</div>
			</div>
		<div class="orbit-caption" id="htmlCaption3">
				<h1>FEATURED RESEARCH </h1>			
				<div class ="discription">
					<a href="lewis.php">
					<P class="title">Direct Manipulation Blendshapes</p>
					<p class = "author">J. P. Lewis</p>
					<p>Direct manipulation for figure animation has long been possible using inverse kinematics. This work describes an easy-to-implement direct manipulation approach for the popular blendshape facial representation.</p>
					</a>
				</div>
			</div>
			
		<div class="orbit-caption" id="htmlCaption4">
				<h1>FEATURED PROJECT </h1>			
				<div class ="discription">
					<a href="http://schoolofdesign.ac.nz/sod/portfolio/project.php?id=1145">
					<p class ="title">Zobeide</p>
					<p>MDDN 331 | Project 2: The Genesis</p>	
					<p class = "author">Christopher Callus</p>
					</a>
				</div>
			</div>
		<div class="orbit-caption" id="htmlCaption5"> 
				<h1>FEATURED PROJECT</h1>
				<div class ="discription">
					<p class = "author">Ben Dudson</p>
					<p>MDDN 331</p>
				</div>
			</div>
	</div>

	<div id="columns">
		
		<div class="column">
			<a href="scholarship.php">
			<h4> Weta PhD. Scholarship </h4>
			<p>Weta Digital has established a PhD scholarship to support postgraduate research in computer graphics at Victoria University of Wellington. Research under the scholarship may take place in the School of Design and/or the School of Engineering and Computer Science.</p>
			<p class="more">Read more &rarr;</p>
			</a>
		</div>
		<div class="column">
			<a href = "weta_lectures.php">
			<h4> Victoria University and Weta Digital Computer Graphics Lecture Series </h4>
			<p>This paragraph discribes the Weta Speakers Series.</p>
			<p class="more">Read more &rarr;</p>
			</a>
		</div>
		<div class="column" id = "latestnews">
			<ul>
			<h2><a href = "news.php">Latest News</a></h2>
			<li><h4>Weta PhD Scholarship Signing</h4>
				<p>3/2013 — Now, a new PhD scholarship in Computer Graphics has been established at Victoria by the leading visual effects company.</p>
				<a href="news.php"><p class="more">More</p></a>
			</li>
			<li><h4><a href ="http://www.oscars.org/awards/scitech/">The Academy Sci-Tech Awards in 2013</a></h4>
				<p>2/2013 — One of our computer graphics teachers received a <a class = "link"  href="http://www.oscars.org/awards/scitech/">Sci-Tech Academy Award</a> this February. 
				</p>		
			</li>
			  <li><h4>Student presentation at Weta</h4>
				<p>2/2013 — Students from <a class = "link" href ="http://www.victoria.ac.nz/ecs/study/courses/comp-308">COMP308</a> visited Weta Digital in January to show their final projects. </p>
				<a href="news.php"><p class="more">More</p></a>
			</li>
			
			  <li><h4><a href="http://computergraphics.ac.nz/staff">First permanent faculty start</a></h4>
				<p>7/2012 — The first full-time faculty for the graphics programme started
				in Trimester 2. 
				</p>
				<a href="news.php"><p class="more">More</p></a>
				</li>

			  <li><h4>COMP 440,441 Students show work</h4>
				<p>6/2012 — An open showing of the final projects from COMP 440 and 441 drew visitors 
				from local industry including Weta.
				The courses were taught by Shane Cooper of Weta Digtal. 
				</p>
				<a href=""><p class="more">More</p></a>
				</li>
			</ul>
			<div id ="up"></div>
			<div id ="down"></div>
		</div>
	</div>	
	

	<?php include('footer.php'); ?>         
