<?php
include('template/header-page.php');
include('admin/init.php');
$albums = get_albums_gallery();

?>
<div class="grid_12 alpha omega" id="albums">
  <h2 class="grid_3 push_5">OUR REAL EVENTS</h2>
   <div class="grid_12 alpha omega" id="albums_container">
         <?php   if(empty($albums)){
           echo "<p> you don't have any albums</p>";
            exit();
		  }else{
		  ?>

	  
	     
		    <?php

$albums = get_albums_gallery();  
foreach($albums as $album){
    $album_id = $album['id'];
    
 
	$images = get_images_gallery($album_id);
    echo 
	'<div class="grid_3" id="single_album">   
      <div class="grid_3" id="album_thumbnail">
	   <img src="admin/uploads/',$images[0]['album'],'/', $images[0]['id'],'.',$images[0]['ext'],'" title="Uploaded',date(' D M Y/h:i',$images[0]['timestamp']),'"alt="hello" height="250px" width="285px"/>
	   <h3 class="grid_2"><a href="view_album.php?album_id=',$album['id'],'">',$album['event'],'</a></h3>
	</div>
	</div>
	'
	
	;
  
}
			      
			   }
			?>
   
	  
	  
  
	  


	  	  
 </div>
</div>


<?php
include('template/footer.php');
?>