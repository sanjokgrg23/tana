<!DOCTYPE html>
<?php 
  include('admin/init.php');
  ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tana_flawless</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/960.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/orbit-1.2.3.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/max.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/960_fluid.css">
        <!--<script src="js/vendor/modernizr-2.6.2.min.js"></script>-->
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/slideshow.js"></script>
		
    </head>
    <body>
	 
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
   
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
		<script language="javascript">
					 $("#thumbnail").hover(function(){
			   $("#view_hover").show();
			};
		</script>
		  <div class="container_12 " id="container">
			  <div class="grid_12 alpha omega" id="background_image">
			      <div class="grid_12 alpha omega" id="topimage_container">
				     <div class="grid_12 alpha omega" id="topimage">
					    <div class="grid_12" id="navmenu">
						   <ul>
						      <li class=""><a href="index.php">HOME</a></li>
							  <li class=""><a href="services.php">OUR SERVICES</a></li>
							  <li class=""><a href="wedding.php">WEDDING AND EVENT</a></li>
							  <li class=""><a href="albums.php">GALLERY</a></li>
							  <li class=""><a href="about.php">ABOUT US</a></li>
							  <li class=""><a href="contact.php">CONTACT US</a></li>
						   </ul>
						</div>
					 </div>
				  </div>
				  <div class="grid_12" id="text_slideshow">
				     <div id="slideshow" class="grid_12 push_1">
						 <p>WE PLAN ALL ASPECTS OF EVERY SOCIAL EVENT AND ALL <br> THE CLIENT NEEDS TO DO IS SHOW UP</p>
						 <p>WE TAKE CARE OF YOU AND YOUR WIFE <br> HELLO HOW ARE YOU DOING BY THE WAY MY FRIEND</p>
          		 </div>
				  </div>
			  </div>
			  <div class="grid_12 alpha omega" id="gallery_preview">
			     <div class="grid_12" id="title_container">
			      <div class="grid_4 alpha" id="space"></div><div class="grid_4 omega" id="gallery_title"><p>SUCCESSFUL EVENTS</p></div><div class="grid_4 omega" id="space"></div>
			      </div>
				  <hr class="grid_12" id="hr">
					  <div class="grid_12 alpha omega" id="gallery_container">
					     <div class="grid_4" id="thumbnail">
						    <img src="img/thumbnail.png">
							<img src="img/thumbnail_small.png" class="thumbnail_small">
							<img src="img/thumbnail_small1.png" class="thumbnail_small">
							<img src="img/thumbnail_small2.png" class="thumbnail_small" style="margin-right:0;">						 
						    <h3>William & Grace</h3>
						 </div>
						 <div class="grid_4" id="thumbnail">
						    <img src="img/thumbnail.png">
							<img src="img/thumbnail_small.png" class="thumbnail_small">
							<img src="img/thumbnail_small1.png" class="thumbnail_small">
							<img src="img/thumbnail_small2.png" class="thumbnail_small" style="margin-right:0;">
						    <h3>Erin & Shawn</h3>
						 </div>
						 <div class="grid_4" id="thumbnail">
						    <img src="img/thumbnail.png">
							<img src="img/thumbnail_small.png" class="thumbnail_small">
							<img src="img/thumbnail_small1.png" class="thumbnail_small">
							<img src="img/thumbnail_small2.png" class="thumbnail_small" style="margin-right:0;">
						    <h3>Naomi & Hillary</h3>
						 </div>
						 <div class="grid_4 push_5" id="see_all"><a href="#">SEE ALL EVENTS</a></div>
						 <div class="grid_12 alpha omega" id="our_story_container">
						    <h2 class="grid_4 push_5">* OUR STORY *</h2><div class="clear"></div>
							<p class="grid_10 push_1">
                                 <?php
                                        $query = "SELECT * FROM `our_story`";
								        $result = mysql_query($query);
										while($row = mysql_fetch_assoc($result)){
										   echo $row['story'];
										}
										
								  		?>						 
								  
							</p>
					     </div>
						 <hr class="grid_12" id="hr">
						 <?php
						    include('template/footer.php');
						 ?>
