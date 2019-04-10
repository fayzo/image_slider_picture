<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TEAM MEMBERS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
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
<div class="slideshow-container">
        <ul class="nav nav-pills mb-3 text-center img-1" id="pills-tab myTab" role="tablist" >
               <li class="nav-item mr-2 img-2">
                 <a class="nav-links active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="images/teams1.jpg" alt=" " /></a>
               </li>
               <li class="nav-item mr-2 img-2">
                 <a class="nav-links" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="images/teams2.jpg" alt=" " /></a>
               </li>
               <li class="nav-item img-2">
                 <a class="nav-links" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><img src="images/teams3.jpg" alt=" " /></a>
               </li>
        </ul>
	 
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			  <div class="row">
			    <img src="images/teamb1.jpg" alt=" " />
			    <div class="col-md-6 text-justify">
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
			</div>
              
			<div class="tab-pane " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row">
			    <img src="images/teamb2.jpg" alt=" " />
			    <div class="col-md-6 text-justify">
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
			</div>

        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
			    <div class="row">
			          <img src="images/teamb3.jpg" alt=" " />
			          <div class="col-md-6 text-justify">
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
			  </div>
</div>
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
 $('#myTab a').on('click', function (e) {
       e.preventDefault()
       $(this).tab('show')
     });
</script>
</body>
</html>