<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="easy-responsive-tabs.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="font_awesome_4.0/font-awesome.css" />
	<style>
		 .slideshow-container {
            max-width: 700px;
            position: relative;
            margin: auto;
        }
	</style>
</head>
<body>

<!-- team -->
<div class="slideshow-container">
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3>
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
					   <li>
					   	<img src="images/teams1.jpg" alt=" " class="img-responsive" />
					   </li>
					   <li>
					   	<img src="images/teams2.jpg" alt=" " class="img-responsive" />
					   </li>
					   <li>
					   	<img src="images/teams3.jpg" alt=" " class="img-responsive" />
					   </li>
					   <li>
					   	<img src="images/teams4.jpg" alt=" " class="img-responsive" />
					   </li>
					</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						    <h4>Lucas Jimenez</h4>
						    <span>Manager</span>
						    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						    <div class="social-bnr-agileits footer-icons-agileinfo">
						    	<ul class="social-icons3">
						    		<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
						    		<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
						    		<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
						    		<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
						    	</ul>
						    </div>							
					    </div>
					</div>

					<div class="tab2">
					    <div class="team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						    <h4>Sarah Connor</h4>
						    <span>Receptionist</span>
						    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>	
						    <div class="social-bnr-agileits footer-icons-agileinfo">
						    	<ul class="social-icons3">
						    		<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
						    		<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
						    		<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
						    		<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
						    	</ul>
						    </div>							
					    </div>
					</div>

					<div class="tab3">
						<div class="team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						     <h4>Ivan Simpson</h4>
						     <span>Manager</span>
						     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						     <div class="social-bnr-agileits footer-icons-agileinfo">
						     	<ul class="social-icons3">
						     		<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
						     		<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
						     		<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
						     		<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
						     	</ul>
						     </div>							
					    </div>
					</div>

					<div class="tab4">
					    <div class="team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						    <h4>Marc Gutierrez</h4>
						    <span>Receptionist</span>
						    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						    <div class="social-bnr-agileits footer-icons-agileinfo">
						    	<ul class="social-icons3">
						    		<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
						    		<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
						    		<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
						    		<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
						    	</ul>
						    </div>							
					    </div>
					</div>
				</div>
			</div>
	</div>
</div>
</div>
<!-- //team -->
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>

<script src="easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
     $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view

        activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
     });

     $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
     });

});
</script>
<!--//tabs-->
</body>
</html>