<?php
/**
 * OnePage Radio Web GPLv4 http://github.com/libre/onepageradio/
 *
 * The PHP page that serves all page requests on WebExploitScan installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All WebExploitScan code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */
include_once "lib/config.php"; 
function headerhtml() {
	global $siteURL, $GoogleTAG, $Title, $MetaTitle, $MetaDescription,$sitename,$urlMetaLogo, $streamname, $streamurl, $streamheader, $streamport, $Mount, $supply, $autoPlay;
	// Footer Copyright
	$copyright="Copyright 2020 OnePage Radio Player"; 
	// Data file store. 
	$DATASTORE="lib/data";
	;
	echo '<!-- Radio Player Onepage Copyleft 2021 Libre. License: https://github.com/libre/radio-one-page/blob/master/LICENSE.txt -->
	<html lang="en">
	<head>
	<title>'; echo $Title; echo '</title>
	<meta charset="UTF-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" /> 
		<!-- boostrap -->
		<!-- Created by expert4it.com -->
		<!-- Created by studiocreation.be -->
		<!-- Created by expresshoster.com -->
		<link rel="stylesheet" href="assets/animate.css">
		<link rel="stylesheet" href="assets/style.css">
		<!-- <link rel="stylesheet" href="assets/css/jm-player.css"> -->
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link href="assets/css/all.css" rel="stylesheet"> <!--load all styles -->
		<meta name="description" content="'; echo $MetaDescription ; echo '"/>
		<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
		<link rel="canonical" href="'; echo $siteURL ; echo '" />
		<meta property="og:locale" content="fr_FR">
		<meta property="og:type" content="website">
		<meta property="og:title" content="'; echo $MetaTitle ; echo '">
		<meta property="og:description" content="'; echo $MetaDescription ; echo '">
		<meta property="og:url" content="'; echo $siteURL ; echo '">
		<meta property="og:site_name" content="'; echo $sitename ; echo '">
		<meta property="og:image" content="'; echo $urlMetaLogo ; echo '">
		<meta property="og:image:secure_url" content="'; echo $urlMetaLogo ; echo '">
		<meta property="og:image:width" content="184">
		<meta property="og:image:height" content="82">
		<meta property="og:image:alt" content="">
		<meta property="og:image:type" content="image/jpeg">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="'; echo $MetaTitle ; echo '">
		<meta name="twitter:description" content="'; echo $MetaDescription ; echo '">
		<meta name="twitter:site" content="@'; echo $sitename ; echo '">
		<meta name="twitter:creator" content="@'; echo $sitename ; echo '">
		<meta name="twitter:image" content="'; echo $urlMetaLogo ; echo '">	
		<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \''; echo $GoogleTAG; echo '\');
</script>
<link href="dist/skin/pink.flag/css/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/jplayer/jquery.jplayer.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	var stream = {
		title: "'; echo $streamname; echo '",
		mp3: "'; echo $streamheader; echo $streamurl; if (!empty($streamport)) { echo ":$streamport"; } echo "/$Mount"; echo '"
	},
	ready = false;

	$("#jquery_jplayer_1").jPlayer({
		ready: function (event) {
			ready = true;
			$(this).jPlayer("setMedia", stream);
		},
		pause: function() {
			$(this).jPlayer("clearMedia");
		},
		error: function(event) {
			if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
				// Setup the media stream again and play it.
				$(this).jPlayer("setMedia", stream).jPlayer("play");
			}
		},
		swfPath: "dist/jplayer",
		supplied: "'; echo $supply; echo '",
		preload: "none",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		keyEnabled: true
	});

});
//]]>
</script>

<link rel="icon" href="fav.ico" />
	</head>
	<body>


	<!-- Header Starts -->
	<div class="navbar-wrapper ">
		  <div class="container">

			<div class="navbar navbar-inverse navbar-fixed-top animated fadeInDown" role="navigation" id="top-nav">
			  <div class="container">
				<div class="navbar-header">
				  <!-- Logo Starts -->
				  <a class="navbar-brand" href="#home"><img src="assets/images/logomin.png" height="45" alt="logo"/></a>
				  <!-- #Logo Ends -->


				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

				</div>


				<!-- Nav Starts -->
				<div class="navbar-collapse  collapse">
				  <ul class="nav navbar-nav navbar-right" >
					  <li class="active"><a href="#home">Accueil</a></li>
					 <li><a href="#about">A propos</a></li>
					 <li><a href="#blogevent">Program</a></li>
					 <!-- <li><a href="#contact">Contact</a></li> -->
				  </ul>
				</div>
				<!-- #Nav Ends -->

			  </div>
			</div>

		  </div>
		</div>
	<!-- #Header Starts -->
	';	
}

function footerhtml() {
	global $streamurl, $copyright, $speedslide;
	echo '<!-- map -->
	<div class="map clearfix">
	</div>
	<!-- map -->

	</div>
	<!--Contact Ends-->
	</div>



	</div>
	<!-- blockblack -->

	</div>
	<!-- overlay -->

	<!-- Footer Starts -->
	<div id="footer">
	<div class="container">
	'; echo $copyright ; echo '
	</div>
	</div>
	<!-- # Footer Ends -->


	<!-- background slider -->
	<div id="myCarousel" class="carousel slide hidden-xs">
	<div class="carousel-inner">
		<div class="active item"><img src="assets/images/back1.jpg" alt="" /></div>
		<div class="item"><img src="assets/images/back2.jpg" alt="" /></div>
		<div class="item"><img src="assets/images/back3.jpg" alt="" /></div>
		<div class="item"><img src="assets/images/back4.jpg" alt="" /></div>
	  </div>
	</div>
	<!-- background slider -->
	  <!-- boostrap -->
 	   <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
 	   <script src="assets/scripts/plugins.js" type="text/javascript"></script>
 	   <script src="assets/scripts/script.js" type="text/javascript"></script>
	   <script src="assets/js/wow.min.js"></script>
	   <script>
		wow = new WOW(
			{
				animateClass: \'animated\',
				offset: '; echo $speedslide ; echo ',
				callback: function (box) {
					console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
				}
			}
		);
		wow.init();
	</script>

	</body>
	</html>
	';	
	
}

function program($filename) { 
	foreach(file("lib/data/$filename.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
		$programdetail = explode(";", $line); 
		$lineLogoRef = $programdetail[0]; 
		$lineTitle = $programdetail[1];
		$lineDescription = $programdetail[2]; 
		$lineDay = $programdetail[3];
		$lineHour = $programdetail[4];
		echo '<li>
		<div class="row">
			<div class="col-xs-12 col-sm-3  col-xs-12"><a href="#" data-toggle="" data-target=""><img src="assets/images/'; echo $lineLogoRef; echo '" class="img-responsive" alt="music theme" /></a></div>
			<div class="col-xs-12 col-sm-6  col-xs-12"><h5><a href="#" data-toggle="" data-target="">'; echo $lineTitle; echo '</a></h5><p>'; echo $lineDescription; echo '</p></div>
			<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>'; echo $lineDay; echo '</b><span>'; echo $lineHour; echo '</span></div>
		</div>
		</li>
		<li>';	
	
	}
}

headerhtml();
$introtxt = file_get_contents("$DATASTORE/intro.txt", true);
echo '
<!-- overlay -->
<div class="container overlay">


<!-- home banner starts -->
<div id="home" class="homeinfo">
<div class="row">
	<div class="col-sm-6 col-xs-12">
	<div class="fronttext">
	 	
		<h2 class="bgcolor animated fadeInUpBig"><span class="glyphicon glyphicon-headphones"></span> LIVE</h2>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning bgcolor fab fa-facebook-f" href="'; echo $urlFacebook; echo '" target="_blank"></a><br>
		<p class=" animated fadeInUp">'; echo $introtxt; echo '</p>
	</div>
	</div>

	<div class="col-sm-5 col-xs-12 col-sm-offset-1">
	<div class="player" id="player">
	<img src="assets/images/logobig.png" class="graphics hidden-xs  animated fadeInRightBig" alt="dj"/>
<center><section id="jp-jplayer">
<div id="jquery_jplayer_1" class="jp-jplayer animated fadeInUp"></div>
<div id="jp_container_1" class="jp-audio-stream" role="application" aria-label="media player">
	<div class="jp-type-single">
		<div class="jp-gui jp-interface">
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-controls">
				<button class="jp-play" role="button" tabindex="0">play</button>
			</div>
		</div>
		<div class="jp-details">
			<div class="jp-title" aria-label="title">&nbsp;</div>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
	</section></center>
	
		</div>
	</div>

</div>	
</div>
<!-- home banner ends -->



<!-- blockblack -->
<div class="blockblack">

<!-- About Starts -->
<div id="about" class="spacer">
<h3><span class="glyphicon glyphicon-user"></span> A Propos</h3>
<div class="row">				
	<div class="col-lg-4 col-sm-4  col-xs-12">
		<img src="assets/images/5.jpg" class="img-responsive" alt="about"/>
	</div>
	<div class="col-lg-5 col-sm-8  col-xs-12">';
	$apropostxt = file_get_contents("$DATASTORE/apropos.txt", true);
	echo $apropostxt;
	echo '</div>
	<div class="col-lg-3 visible-lg">
</div>
</div>
</div>
<!-- About Ends -->


<!--Blog Event Starts-->
<div id="blogevent"  class="blogevent spacer">
<div class="row">

<div class="events">
<h3><span class="glyphicon glyphicon-calendar"></span> Grille des programe</h3>
	<ul>';

	program("lundi");
	program("mardi");
	program("mercredi");
	program("jeudi");
	program("vendredi");
	program("samedi");
	program("dimanche");

	echo '</ul>
</div>
</div>
</div>
<!--Blog Events Ends-->


<!--Contact Starts
<div id="contact" class="spacer">
<div class="contactform center">
<h3><span class="glyphicon glyphicon-envelope"></span> Contact</h3>
  <div class="row">      
      <div class="col-sm-6 col-sm-offset-3 ">
      <h4>Get in touch or<br><b>Just say Hello!</b></h4>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <textarea rows="5" placeholder="Message"></textarea>
        <button class="btn btn-warning bgcolor">Send</button>
      </div>
  </div>-->';
footerhtml();
exit(0);  







