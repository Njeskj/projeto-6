<!DOCTYPE html>
<html lang="en">
<head>
	<title>IM MULTISPORTS</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact-form.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>  
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<!--<![endif]-->

	<script src="js/TMForm.js"></script>
	<script src="js/modal.js"></script>

	<!--[if lt IE 8]>
  <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
  <!--[if lt IE 9]>
  	<script src="js/html5shiv.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
  <![endif]-->
</head>

<body>

	<!--========================================================
														HEADER 
	=========================================================-->
	<?php include('header.php') ?>
	<!--========================================================
														CONTENT 
	=========================================================-->
	<section id="content">        




		<div class="container pad4">
			<h2 class="color2">our contact</h2>
			<p class="txt1 color3 txt_cntr">information</p>

				<section class="content_map">
					<div class="google-map-api"> 
						<div id="map-canvas" class="gmap"></div> 
					</div> 
				</section>



		</div>







		<div class="container pad2">

			<div class="row">
				<div class="grid_4 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.1s">
					

					<div class="wrapper marTop8">
						<i class="fa fa-home icon4"></i>
						<div class="box">
							<p class="marTop7">8901 Marmora Road,<br>Glasgow, D04 89GR.</p>
						</div>
					</div>

					<div class="wrapper marTop9">
						<i class="fa fa-phone icon4"></i>
						<div class="box">
							<p class="marTop7">+1 800 603 6035<br>+1 800 889 9898</p>
						</div>
					</div>

					<div class="wrapper marTop9">
						<i class="fa fa-envelope icon4"></i>
						<div class="box">
							<p class="marTop10"><a href="mailto:">mail@demolink.org</a></p>
						</div>
					</div>
				</div>


				<div class="grid_8">
					<form id="contact-form">
						<div class="contact-form-loader"></div>
						<fieldset>
							<label class="name">
								<input type="text" name="name" placeholder="Name" value="" data-constraints="@Required @JustLetters"  />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							</label>
						 
							<label class="email">
								<input type="text" name="email" placeholder="E-mail" value="" data-constraints="@Required @Email" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
							<!-- <label class="phone">
								<input type="text" name="phone" placeholder="Phone" value="" data-constraints="@Required @JustNumbers" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							</label> -->
						 
							<label class="message">
								<textarea name="message" placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>
							<div class="btns">
								<!-- <a href="#" class="more_btn" data-type="reset">Clear</a> -->
								<a href="#" class="more_btn" data-type="submit">Send message</a>
							</div>
						</fieldset> 
						<div class="modal fade response-message">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Modal title</h4>
									</div>
									<div class="modal-body">
										You message has been sent! We will be in touch soon.
									</div>      
								</div>
							</div>
						</div>
					</form>
				</div>


			</div>


		</div>















	</section>



	<!--========================================================
														FOOTER 
	=========================================================-->
	<?php include('footer.php') ?>



<script type="text/javascript"> 
	google_api_map_init();
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068,14)); 
		var marker;

		var markerIcon = { 
				url: "images/gmap_marker.png", 
				size: new google.maps.Size(42, 65), 
				origin: new google.maps.Point(0,0), 
				anchor: new google.maps.Point(21, 70) 
		};

		function initialize() { 
			var mapOptions = { 
				zoom: 14, 
				center: coordData, 
				scrollwheel: false, 
				// styles: styleArray 
			}

			var contentString = "<div></div>"; 
			var infowindow = new google.maps.InfoWindow({ 
				content: contentString, 
				maxWidth: 200 
			});
			 
			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions); 
			marker = new google.maps.Marker({ 
				map:map, 
				draggable:true, 
				position: coordData, 
				icon: markerIcon 
			});
			
		}
		google.maps.event.addDomListener(window, "load", initialize); 
	}
</script>

<script src="js/script.js"></script>


</body>
</html>