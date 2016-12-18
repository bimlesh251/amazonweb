<?php
$conn = mysql_connect('mysql8.000webhost.com','a1283025_wishes','zxcvbnm@1234');
$res = mysql_select_db('a1283025_wishes',$conn);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Bimlesh">
		<meta name="author" content="Kanika">
		<title>Thank you for your presence and wishes</title>
		<link rel="shortcut icon" href="images/favicon.html">

		<!-- Pace Loader -->
		<script src="js/pace.min.js"></script>
  		<link href="css/pace.css" rel="stylesheet" />

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Owl Carousel stylesheet -->
		<link href="css/owl.carousel.css" rel="stylesheet">

		<!-- Owl Carousel Default Theme -->
		<link href="css/owl.theme.css" rel="stylesheet">

		<!-- Fancybox -->
		<link href="css/jquery.fancybox.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Serif%7CEngagement%7COpen+Sans:800" rel="stylesheet">

		<!-- Font Awesome Icons -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		
		<style>
   body {
    text-align:center;
  }

  #map-canvas {
    width:960px;
    height:300px;
    margin: 50px auto;
  }
</style>


	</head>
	<body  onload="initialize()">

		<!-- ========== MENU START ========== -->

		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="Bimleshkanika.com" class="img-responsive" /></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#about">About Us</a></li>					
						<li><a href="#gallery">Gallery</a></li>	
						<li><a href="#wishes">Your Wishes</a></li>						
					</ul>
				</div>
			</div>
		</div>

		<!-- ========== MENU END ========== -->

		<div class="container">

			<!-- ========== BANNER START ========== -->

			<div id="slides">
				<div class="slides-container">
					<img src="images/banner1.jpg" alt="" />
					<img src="images/banner8.jpg" alt="" />
					<img src="images/banner9.jpg" alt="" />
				</div>
				<div class="tint">
					<div class="welcome text-center" data-scroll-reveal="enter from the top after 2s">
						<h1>Bimlesh &amp; Kanika</h1>
						<p>are just married</p>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>						
					</div>
				</div>
				
			</div>

			<!-- ========== BANNER END ========== -->

			<!-- ========== ABOUT US START ========== -->

			<section id="about" class="text-center">
				<div class="row">
					<div class="col-sm-12 heading" data-scroll-reveal>
						<h2>About Us</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6" data-scroll-reveal="enter from the left">
						<a href="#" class="hover-effect">
							<img src="images/aboutus1.jpg" height="370" width="370" class="img-responsive img-circle" alt="" />
							<span class="img-circle">
								<i class="fa fa-link fa-3x"></i>
							</span>
						</a>
						<h5>Bimlesh Tiwari</h5>
						<p>The youngest of three, I was born in a small village of Faizabad district (Uttar Pradesh) in home of Mr. T.N. Tiwari and Mrs. Urmila Tiwari. I received my bachelors degree from Avadh University and moved to delhi. After that I completed my Post Graduation and working as a software professional. I have finally found absolute happiness in my perfect match. Kanika shares many of my qualities and interests and we compliment each other, as if by design. </p>
						<ul class="social-icons">
							<li><a href="http://facebook.com/bimlesh25" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://twitter.com/bimlesh25" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://plus.google.com/108563559048616900429/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<div class="mobile-divider"><span></span><i class="fa fa-heart"></i><span></span></div>
					</div>
					<div class="col-sm-6" data-scroll-reveal="enter from the right after 0.5s">
						<a href="#" class="hover-effect">
							<img src="images/about2.jpg" height="370" width="370" class="img-responsive img-circle" alt="" />
							<span class="img-circle">
								<i class="fa fa-link fa-3x"></i>
							</span>
						</a>
						<h5>Kanika Sharma</h5>
						<p>Daughter of Mr. Narender Sharma and Mrs. Poonam Sharma, I was born in New Delhi. I have a wonderful and supportive family. I love spending time with my family and have become a bit of a homebody, finding comfort in quality time with the people I love. I believe that happiness is a choice and chooses to surround myself with the people and things that make me the happiest in life! I am working as a project cordinator in an IT company.</p>
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</section>

			<!-- ========== ABOUT US END ========== -->			
			
				<!-- ========== GALLERY START ========== -->

			<section id="gallery" class="text-center">
				<div class="row">
					<div class="col-sm-12 heading" data-scroll-reveal>
						<h2>Gallery</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>
				<div class="row" data-scroll-reveal>
					<ul class="gallery">
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big01.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small01.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big02.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small02.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big03.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small03.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big07.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small07.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big06.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small06.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big04.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small04.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big15.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small15.jpg" class="img-rounded img-responsive" alt="" height="120"/>
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big13.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small13.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big14.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small14.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big09.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small09.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big10.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small10.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						<li class="col-xs-4 col-sm-3 col-md-2">
							<a href="images/gallery-big16.jpg" class="fancybox hover-effect" data-fancybox-group="group">
								<img src="images/gallery-small16.jpg" class="img-rounded img-responsive" alt="" />
								<span class="img-rounded">
									<i class="fa fa-search fa-3x"></i>
								</span>
							</a>
						</li>
						
					</ul>
				</div>
			</section>

			<!-- ========== GALLERY END ========== -->
			<!-- ========== WISHES START ========== -->

			<section id="wishes">
				<div class="row">
					<div class="col-sm-12 heading" data-scroll-reveal>
						<h2>Best Wishes</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>
				<?php
					$sql = mysql_query("Select * from wishes where status=1 order by id desc");
					while($row = mysql_fetch_assoc($sql)){
						
				?>
				<div>
				  <p align="left"><?php echo $row['message'];?>
					<br>
					<span style="font-weight:bold;"><?php echo $row['name'];?></span></p>
				</div>
				
				<?php } ?>
				<div class="row">
					<div class="col-sm-12 text-center" data-scroll-reveal>
						<h3>Wanna Say Something?</h3>
					</div>
				</div>
				<form role="form" action="process.php" method="post">
					<div class="row" data-scroll-reveal>
						<div class="form-group col-sm-6">
							<input type="text" class="form-control" id="input-name" placeholder="Name" name="input-name">
						</div>
					</div>
					<div class="row" data-scroll-reveal>
						<div class="form-group col-sm-12">
							<textarea name="message" class="form-control" rows="5" placeholder="Your message"></textarea>
						</div>
					</div>
					<div class="row" data-scroll-reveal>
						<div class="form-group col-sm-12 text-center">
							<button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</section>

			<!-- ========== WISHES END ========== -->

			

			
			<!-- ========== FOOTER START ========== -->
			<footer>
				<div class="row text-center">
					<div class="col-sm-12" data-scroll-reveal>
						&copy; 2014  www.bimleshkanika.com<br>						
					</div>
				</div>
			</footer>

		<!-- ========== FOOTER END ========== -->

		</div>

		<!-- Modernizr Plugin -->
		<!--script src="js/modernizr.custom.97074.js"></script--->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/retina-1.1.0.min.js"></script>

		<!-- Superslides Plugin -->
		<!--script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.animate-enhanced.min.js"></script-->
		<script src="js/jquery.superslides.js"></script>

		<!-- Countdown Plugin -->
		<script src="js/jquery.plugin.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>

		<!-- Scrolly Plugin -->
		<script src="js/jquery.scrolly.js"></script>

		<!-- CountTo Plugin -->
		<!--script src="js/jquery.countTo.js"></script-->

		<!-- Owl Carousel Plugin -->
		<script src="js/owl.carousel.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/jquery.fancybox.js"></script>

		<!-- Scroll Reveal Plugin -->
		<script src="js/scrollReveal.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>


	</body>
	<a href="http://www.000webhost.com/" target="_blank"><img src="http://www.000webhost.com/images/120x60_powered.gif" alt="Web Hosting" width="120" height="60" border="0" /></a>
</html>
