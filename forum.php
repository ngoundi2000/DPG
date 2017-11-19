 
 
<!DOCTYPE html>
<html lang="en">

<head>
	<title>FCS500e-com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content=" " />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- //font -->
</head>

<body>
	<!-- banner -->
	<div class="banner" id="home">
		<!-- agileinfo-dot -->
		<div class="agileinfo-dot">
			<div class="head">
				<div class="navbar-top">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
						<div class="navbar-brand logo ">
							<h1><a href="index.php"> FCS500 Forum  </a></h1>
						</div>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav link-effect-4">
							<li class="active"><a href="index.php" data-hover="Home">Home</a> </li>
							 
							<li><a href="#features" class="scroll"> </a> </li>
							<li><a href="#contact" class="scroll">Submit a topic</a></li>
							<li><a href="#contact" class="scroll"></a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</div>
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
	   						
						</div>
						<div class="clearfix"> </div>

					</div>
				</div>
			</div>
		</div>
		<!-- //agileinfo-dot -->
	</div>
	<!-- //banner -->
	 
	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div id="wrapper">
<h2>Recent Post</h2>
 
<hr/>
<div id="content">
 
  
</div>
</div>
		</div>
	</div>
	<!-- //about -->
	 
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			 
			<div class="w3-agileits-services-grids">
				 
			</div>
		</div>
	</div>
	<!-- //services -->
	 
	 
	 
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="about-heading">
				<h3>TOPIC REGISTRATION</h3>
				<p>You Are Always One Step Ahead</p>
			</div>
			<div class="w3l-about-grids">
				 
				<div class="contact-w3ls-row">
					 
						<form action="forum.php"name="get" method="post">
						<div class="col-md-12 col-sm-12 contact-left agileits-w3layouts">
						 Registration<hr> 
							 <textarea name="Message" placeholder="TYPE YOUR TOPIC HERE 100  LETTERS" required=""></textarea>
							 <input type="submit" name="r"value="Register">
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	
	
	<hr><hr><hr><hr>	<hr><hr><hr><hr>
	<!-- contact -->
	<div class="treat" id="treat">
		<div class="container">
			
			<div class="w3l-about-grids">
				 
				 
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		    class="map" allowfullscreen=""></iframe>
	</div>
	<!-- //map -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_bottom">
				<div class="col-md-6 agileinfo_footer_bottom_grid">
					<h6>Links</h6>
					<ul class="tag2 tag_agileinfo">
						<li><a href="#home" class="scroll">Home</a></li>
						 
						<li><a href="#contact" class="scroll">Submit a topic</a></li>
					</ul>
				</div>
				<div class="col-md-6 agileinfo_footer_bottom_grid">
					<h6>Follow Us</h6>
					<div class="w3l-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_footer_bottom1">

				<p>© 2017 FCS500 FORUM| Design by <a href="http://w3layouts.com">FCS500 HTTTC BAMBILI </a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- //footer -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/bars.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="js/bootstrap.js"></script>
</body>

</html>