<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	   <!-- <link   href="fontawesome_5_4/css/fontawesome.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/solid.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/regular.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/brands.css" rel="stylesheet"> -->
    <!-- <link   href="fontawesome_5_4/css/fontawesome.min.css" rel="stylesheet"> -->

    <!-- <script src="fontawesome_5_4/js/fontawesome.js"></script>
    <script src="fontawesome_5_4/js/solid.js"></script>
    <script src="fontawesome_5_4/js/regular.js"></script>
    <script src="fontawesome_5_4/js/brands.js"></script> -->
    <!-- <script src="fontawesome_5_4/js/all.js"></script> -->
    <link href="google_icons.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="screen" href="font_awesome_4.0/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="src/css/swipebox.css">
    <link rel="stylesheet" href="styles.css">

    
</head>
<body>
     <section class="portfolio-w3ls" id="gallery">
		<div class="col-md-3 gallery-grid gallery1">
			<a href="img/1.jpg" class="swipebox"><img src="img/1.jpg" class="img-responsive" alt="/">
				<div class="textbox">
				<h4>SUN RISE</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
		    </a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="img/1.jpg" class="swipebox"><img src="img/1.jpg" class="img-responsive" alt="/">
				<div class="textbox">
				<h4>SUN RISE</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
		    </a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="img/1.jpg" class="swipebox"><img src="img/1.jpg" class="img-responsive" alt="/">
				<div class="textbox">
				<h4>SUN RISE</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
		    </a>
		</div>
	</section>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="lib/ios-orientationchange-fix.js"></script>
	<script src="lib/jquery-2.1.0.min.js"></script>
	<script src="src/js/jquery.swipebox.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

			/* Basic Gallery */
			$('.swipebox').swipebox();
			
			/* Video */
			$('.swipebox-video').swipebox();

			/* Dynamic Gallery */
			$('#gallery').click(function(e) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'img/1.jpg', title : 'My Caption' },
					{ href : 'img/2.jpg', title : 'My Second Caption' }
				] );
			} );

      });
	</script>
</body>
</html>