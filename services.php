<?php
 include('template/header-page.php');
 include('admin/init.php');
 ?>
<div class="grid_10 push_1" id="our_services">
  <h2 class="grid_2 push_4">Our Services</h2><div class="clear"></div>
  <?php
      $query = "SELECT * FROM `services`";
	  $result = mysql_query($query);
	  while($row = mysql_fetch_assoc($result)){
	      echo'
		  <p class="grid_8 push_1">
		     ',$row['description'],'
		  </p>
		  ';
	  }
	  ?>
</div>
<?php
include('template/footer.php');
?>