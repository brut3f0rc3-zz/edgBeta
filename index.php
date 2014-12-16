	<html>
	<head>	
		<meta charset="utf-8">
		<meta name="author" content="Palash Chatterjee, Rohan Sahay">
		<meta name="keywords" content="Edge, Techno India, TISL, Techfest">
		<meta name="description" content="Techno India and Geekonix present the largest technical fest in Kolkata">
		<title>Edge 2015</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!--
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Give+You+Glory' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Port+Lligat+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
		-->
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="custom.css">
		<link rel="stylesheet" type="text/css" href="neon.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="jquery-ui.min.js"></script>
		<script src="jquery.backstretch.min.js"></script>
		
	</head>
	<body>
		<script type="text/javascript">
			$(function(){
				$("#body").css("height", $(window).height());
				$("#landing").css("height", $(window).height());
				$("#slide2new").css("height",$(window).height());
				$("#slide2new").css("width", $(window).width());
			});

		</script>
		<script src="typed.js"></script>
		<script>
		  $(function(){
		      $(".typewriter").typed({
		        strings: ["Explore ^1000| Develop ^1000| Grow ^1000| Emerge"],
		        typeSpeed: 200,
		        backSpeed: 100,
		        startDelay:1000,
		        loop:true
		      });
		  });

		  //Explore | Develop | Grow | Emerge
		</script>
		<div id="body">

			<!-- Social Links Fixed-->
			<div id="social">
						<a href="http://facebook.com/Gx.Edg"><i class="fa fa-2x fa-facebook"></i></a>
						<a href="https://twitter.com/gxEDGE"><i class="fa fa-2x fa-twitter"></i></a>
						<a><i class="fa fa-2x fa-youtube"></i></a>
						<a style="padding-bottom: -10px!important"><i class="fa fa-2x fa-github"></i></a>
			</div>

			<div id="landing">
				
				<div id="slide1"></div>
				<div id="overlay">
				<div id="symbols">
					<div id="logo" class="top" style="float:left">
						<img src="images/logo.png">
					</div>
					<div id="mascot" class="top" style="float:right">
						<img src="images/mascot.png">
					</div>
					<div class="clearfix"></div>
				</div>
					<h2 class="top">Techno India Salt Lake </h2>
					<span class="presents top" style="font-family: 'Rancho'">presents</span>
					<h1 class="top"><span style="color:rgb(255, 41, 41); font-family: 'Signika', serif">Edge</span> <span style="color:rgb(255, 255, 125); font-family: 'Port Lligat Sans', serif">2015</span></h1>
					<span id="sidebar"><span class="out">3  </span>  -  <span class="out">  5  </span>  April</span>
					<div class="top typewriter" style="font-family: 'Abel'"></div>
					<div class="down-arrow top" >
						<span>
							<i id="down-arrow" class="fa fa-4x fa-angle-down top" style="color: white; padding: 12px 22px;border: 4px white solid;border-radius: 50%;"></i>
						</span>
					</div>
				</div>
				
			</div>

			<script type="text/javascript">

					$.backstretch(["images/0.jpg","images/1.jpg","images/2.jpg","images/6.jpg","images/5.jpg", "images/9.jpg"], {fade: 750, duration: 5000});

					/*$(".down-arrow").click(function(){
						var height = 750;
						console.log(height);
						console.log("Clicked");
						$("body").animate({scrollTop:height}, 1000, 'swing', function(){});
					});*/
					/*
					$(".down-arrow").mouseenter(function(){
						$("#down-arrow").addClass('flip');
					}).mouseleave(function(){
						$("#down-arrow").removeClass('flip');
						});
					*/
					$(document).ready(function() {

						var height = $(window).height();
						$(".down-arrow").click(function() {
							console.log("Clicked");
							$("#body").css("height",2*height);
							$("#body").stop().animate({ marginTop: -1*height}, 800);
							setTimeout(function(){
								$("#slide2new").css("display","block");
								$("#slide2new").animate({opacity:1},500);
							},100);
							setTimeout(function(){
								$(".drapes").slideDown(2500,'easeOutBounce');
							},800);
							
						});
						$(".up-arrow").click(function() {
							console.log("Clicked");
							$(".drapes").slideUp(2500);
							setTimeout(function(){
								$("#slide2new").css("opacity",0);
							},1000);
							setTimeout(function(){
								$("#body").css("height",height);
								$("#slide2new").css("display","none");
								$("#body").stop().animate({ marginTop: 0}, 1000);
							},2500);
							
						});

						$("footer").hover(function(){
							$(this).animate({height: 40, background:'white'}, 250);
						}, function(){
							$(this).animate({height: 5, background:'transparent'}, 250);
						});

						
						$(".down-arrow").hover(function(){
							$("#sidebar").animate({marginTop:"+=100px" }, 400);
						}, function(){
							$("#sidebar").animate({marginTop:"-=100px" }, 400);
						});


					});
					/*
					$(".down-arrow").mouseenter(function(){
						$("#down-arrow").css('border-width', '4px 3px');
					}).mouseleave(function(){
						$("#down-arrow").css('border-width', '2px');
					});*/
				
			</script>
			<!--
			<div id="slide2">
				<div style="font-size:100px; font-family: 'Give You Glory'; color:#fff; text-align: center;">Coming Soon...</div>
				<div>
					<iframe width="800px" height="525px" src="http://www.youtube.com/embed/cAwmlIMaxGg"></iframe> 
				</div>
			</div>
			-->

			<div id="slide2new">
				<div class="movie-wrapper">
					<!--<iframe width="100%" height="68%" src="http://www.youtube.com/embed/cAwmlIMaxGg?modestbranding=1&autohide=1&rel=0&autoplay=0&showinfo=0&iv_load_policy=3&theme=light" frameborder="0"></iframe>-->
					<iframe width="100%" height="68%" src="http://www.youtube.com/embed/cAwmlIMaxGg?modestbranding=1&autohide=1&rel=0&autoplay=0&showinfo=0&controls=1&theme=light" frameborder="0"></iframe>
				</div>
				<div id="drapes">
					<img src="images/red_drape.png" class="drape-left drapes" height="95%" width="30%">
					<img src="images/red_drape.png" class="drape-right drapes" height="95%" width="30%">
				</div>
				<div class="extra1" role="presentation"></div>
				<div class="extra2" role="presentation"></div>
				<div class="extra3" role="presentation"></div>
				<div class="extra4" role="presentation"></div>
				<div class="extra5" role="presentation"></div>
				<div class="extra6" role="presentation"></div>
				<!--
					<div class="up-arrow top" >
						<span>
							<i id="up-arrow" class="fa fa-2x fa-angle-up top" style="color: white; padding: 10px 20px; border-radius: 50%; border: 3px solid #fff"></i>
						</span>
					</div>-->
			</div>

		</div>

		<footer>
			<div>&copy; Edge 2015. All rights reserved.</div>
		</footer>
	</body>
</html>