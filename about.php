<?php include('admin/init.php');?>
<!DOCTYPE html>
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
        <!--<script src="js/vendor/modernizr-2.6.2.min.js"></script>-->
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/slideshow.js"></script>
		
</head>
<body>
<div class="container_12" id="container">
   <div class="grid-12 alpha omega" id="image_container">
       
   <div class="grid_12 alpha omega" id="top_container">
      
        <div class="grid_4 push_4" id="logo"></div><div class="clear"></div>
        <div class="grid_12" id="nav_menu">
		       <ul>			  <li class=""><a href="index.php">HOME</a></li>
							  <li class=""><a href="services.php">OUR SERVICES</a></li>
							  <li class=""><a href="wedding.php">WEDDING AND EVENT</a></li>
							  <li class=""><a href="albums.php">GALLERY</a></li>
							  <li class=""><a href="about.php">ABOUT US</a></li>
							  <li class=""><a href="contact.php">CONTACT US</a></li>
			   </ul>
		</div>

     		
   </div>
     <div class="grid_10 push_1" id="ourstory">
	       <h2 class="grid_2 push_4">* Our Story *</h2><div class="clear"></div>
		   <p class="grid_8 push_1">
                  <?php
				      $query = "SELECT * FROM `our_story`";
					  $result = mysql_query($query);
					  while($row = mysql_fetch_assoc($result)){
					    echo $row['story'];
					  }
				  ?>
		   </p>
	 </div>
	 <div class="grid_10 push_1" id="about_us">
	           <h2 class="grid_2 push_4">* About Us *</h2><div class="clear"></div>
			   <p class="grid_8 push_1">
					<?php
					     $query = "SELECT * FROM `about`";
						  $result = mysql_query($query);
						  while($row = mysql_fetch_assoc($result)){
							echo $row['description'];
						  }
					  ?>
		       </p>
	 </div>
   </div>
   <?php
      include('template/footer.php');
   ?>

</div>  
</body>	
	
</html>