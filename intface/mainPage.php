<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="NSRC &mdash; National Solar Radiation Center">
	<meta name="keywords" content="Philippine Atmospheric Geophysical Astronomical Services Administration">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>NSRC &mdash; National Solar Radiation Center.</title>

	<link rel="icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
	
	<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles2.css">
	
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/colors.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/container-bg.css">

<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript">
			$(document).ready(function()
			{
					$('.fancybox').fancybox();
		
					// Change title type, overlay closing speed
					$(".fancybox-effects-a").fancybox({
						helpers: {
							title : {
								type : 'outside'
							},
							overlay : {
								speedOut : 0
							}
						}
					});
		
					// Disable opening and closing animations, change title type
					$(".fancybox-effects-b").fancybox({
						openEffect  : 'none',
						closeEffect	: 'none',
		
						helpers : {
							title : {
								type : 'over'
							}
						}
					});
		
					// Set custom style, close if clicked, change title type and overlay color
					$(".fancybox-effects-c").fancybox({
						wrapCSS    : 'fancybox-custom',
						closeClick : true,
		
						openEffect : 'none',
		
						helpers : {
							title : {
								type : 'inside'
							},
							overlay : {
								css : {
									'background' : 'rgba(238,238,238,0.85)'
								}
							}
						}
					});
		
					// Remove padding, set opening and closing animations, close if clicked and disable overlay
					$(".fancybox-effects-d").fancybox({
						padding: 0,
		
						openEffect : 'elastic',
						openSpeed  : 150,
		
						closeEffect : 'elastic',
						closeSpeed  : 150,
		
						closeClick : true,
		
						helpers : {
							overlay : null
						}
					});
		
					$('.fancybox-buttons').fancybox({
						openEffect  : 'none',
						closeEffect : 'none',
		
						prevEffect : 'none',
						nextEffect : 'none',
		
						closeBtn  : false,
		
						helpers : {
							title : {
								type : 'inside'
							},
							buttons	: {}
						},
		
						afterLoad : function() {
							this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
						}
					});
	
					$('.fancybox-media')
						.attr('rel', 'media-gallery')
						.fancybox({
							openEffect : 'none',
							closeEffect : 'none',
							prevEffect : 'none',
							nextEffect : 'none',
		
							arrows : false,
							helpers : {
								media : {},
								buttons : {}
							}
						});
					});
		</script>
</head>

<body>
<!-- preloader -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>
<header class="header" id="home">
<div class="solid-color full-screen">
	<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kane-navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#"><img src="images/nsrctitle.png" alt="Nsrc"></a>
				
			</div>
			<div class="navbar-collapse collapse" id="kane-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation">
					<li><a href="#parameters">Parameters</a></li>
					<li><a href="#export">More features</a></li>
					<li><a href="#viewer">Map</a></li>
					<li><a href="#support-and-feedback">Support</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
				<div class="image-logo">
					<img src="images/nsrclogo.png" alt="Nsrc">
				</div>
				<div class="col-md-8 col-md-offset-2">
					<div class="intro-section">
						<h1 class="intro">NSRC &mdash; National Solar Radiation Center</h1>
						<h5>Philippine Atmospheric Geophysical Astronomical Services Administration</h5>
						<!-- Learn more -->
						<div id="learn-more" class="local-scroll">
							<a href="#parameters" class="scroll-down">v</a>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
</header>

<!-- OverView -->
<section class="app box container-bg-solar" id="parameters">
	<div class="container">
			<div class="row">
			<div class="section-header wow fadeIn animated" data-wow-duration="1.0s">

			<h2 class='dark-text'><a class='font-clr datav'  onClick = "loadpag();">Solar Radiation</a></h2>

				</div>
				<div class="section-description">
						is the power per unit area produced by the Sun in the form of electromagnetic radiation. Irradiance may be measured in space or at the Earth's surface after atmospheric absorption and scattering. Total solar irradiance (TSI), is a measure of the solar radiative power per unit area normal to the rays, incident on the Earth's upper atmosphere. The solar constant is a conventional measure of mean TSI at a distance of one Astronomical Unit (AU). Irradiance is a function of distance from the Sun, the solar cycle, and cross-cycle changes.Irradiance on Earth is most intense at points directly facing (normal to) the Sun.
				</div>
				<div class="full-size-image wow fadeIn animated">
				<img class="transpa" src="images/cmp10.jpg" alt="Nsrc">
				</div>
			</div>
	</div>
</section>


<!-- A convenient workspace -->
<section class="app box container-bg-uv" id="interface">
	<div class="container">
			<div class="row">
				<div class="section-header wow fadeIn animated" data-wow-duration="1.0s">
					<h2 class="white-text"><a class="font-clr datav" onClick = "loadpag();">Ultravaiolet Radiation</a></h2>
			</div>
				<div class="section-description">
						is an electromagnetic radiation with a wavelength from 400 nm to 100 nm, shorter than that of visible light but longer than X-rays. Though usually invisible, under some conditions children and young adults can see ultraviolet down to wavelengths of about 310 nm,and people with aphakia (missing lens) can also see some UV wavelengths. Near-UV is visible to some insects and birds.

UV radiation is present in sunlight, and is produced by electric arcs and specialized lights such as mercury-vapor lamps, tanning lamps, and black lights. Although lacking the energy to ionize atoms, long-wavelength ultraviolet radiation can cause chemical reactions, and causes many substances to glow or fluoresce. Consequently, biological effects of UV are greater than simple heating effects, and many practical applications of UV radiation derive from its interactions with organic molecules.
				</div>
				<div class="full-size-image wow fadeIn animated">
				<img class="transpa" src="images/uv.jpg" alt="Nsrc">
				</div>
	</div>
</section>

<!-- Color! Color! Color! -->
<section class="app box container-bg-csd" id="color">
	<div class="container">
			<div class="row">
				<div class="section-header wow fadeIn animated" data-wow-duration="1.0s">
					<h2 class="dark-text"><a onClick = "loadpag();" class="font-clr datav">Sunshine Duration</a></h2>
				</div>
				<div class="section-description">
						 is a climatological indicator, measuring duration of sunshine in given period (usually, a day or a year) for a given location on Earth, typically expressed as an averaged value over several years. It is a general indicator of cloudiness of a location, and thus differs from insolation, which measures the total energy delivered by sunlight over a given period.

Sunshine duration is usually expressed in hours per year, or in (average) hours per day. The first measure indicates general sunniness of a location compared to other places, while the latter allows for comparison of sunshine in various seasons on the same location.Another often used measure is percentage ratio of recorded bright sunshine duration and daylight duration in the observed period.

An important use of sunshine duration data is to characterize the climate of sites, especially of health resorts. This also takes into account the psychological effect of strong solar light on human well-being.
				</div>
				<div class="full-size-image wow fadeIn animated">
				<img class="transpa"src="images/csd.jpg" alt="Nsrc">
				</div>
			</div>
	</div>
</section>

<!-- Pixave Mini -->
<section class="app box grey-bg" id="pixavemini">
	<div class="container">
		<div class="row">
			<div class="col-md-6 left-align wow fadeInRight animated" data-wow-duration="1.0s">
				<h2 class="dark-text-small">Coming soon.. – Graphs</h2>
				<p>Graphs and Bars to are displayed to show how much the data differ from each day,month or year.</p>
			</div>
			<div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1.0s">
				<div class="right-image right-image1">
					<img src="images/graphs.jpg" alt="Pixave">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Capture anything -->
<section class="app" id="capture">
	<div class="container">
		<div class="row">
			<div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1.0s">
				<div class="phone-image">
					<img src="images/gmaps.png" alt="">
				</div>
			</div>
			<div class="col-md-6 left-align wow fadeInRight animated" data-wow-duration="1.0s">
				<h2 class="dark-text-small">and Maps.</h2>
				<p>Each station is plotted on maps with corresponding latest data.</p>
			</div>
		</div>
	</div>
</section>

<!-- Export -->
<section class="app box dark-gray-bg" id="export">
	<div class="container">
			<div class="row">
				<div class="section-header wow fadeIn animated" data-wow-duration="1.0s">
					<h2 class="white-text"><a href="#parameters" class="font-clr-wht">Export Data</a></h2>
					<div class="section-description-white">
						<p>Export solar data easily with a button. and in a CSV format and anlyze the data using spreadsheet applications.</p>
					</div>
				</div>
				<div class="full-size-image wow fadeIn animated">
					<img src="images/exportimg.png" alt="NSRC">
				</div>
				<div class="section-header wow fadeIn animated" data-wow-duration="1.0s">
					<div class="section-description-white">
						<p></p>
					</div>
				</div>
			</div>
	</div>
</section>

<!-- footer -->
<footer class="support-and-feedback" id="support-and-feedback">
	<div class="container box dark-gray-bg">
		<div class="section-header wow fadeIn animated" data-wow-duration="1.0s">
			<div class="section-description white-text">
				We’re always here to help with any questions or comments &mdash; feel free to contact us.
			</div>
            <div class="contact-items row mb-60 mb-xs-40">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item mail">
                                <a href="mailto:lery.018.official@gmail.com">lery.018.official@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</footer>

<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/matchMedia.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
	function loadpag(){ 
      window.location.href = "dataview.php?="+ (new Date()).getTime();
		}
    </script>

</body>
</html>
