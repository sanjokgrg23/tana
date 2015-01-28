<?php
 include('template/header-page.php');
 include('admin/init.php');
/*
  if(!isset($_GET['category_id']) || empty($_GET['category_id']) || album_check($_GET['category_id']) === false){
	        header('Location:albums.php');
		      exit();
	  }*/
	   $album_id = $_GET['album_id'];
   $album_data = album_data_gallery($album_id, 'name','event');
    echo '<div class="grid_12 alpha omega" id="view_album">';
	  echo '<div class="grid_12 alpha omega" id="view_album_container">';
   echo '<p class="grid_2 push_5">',$album_data['event'],'</p><div class="clear"></div>
          <p class="grid_2 push_5" style="margin-left:30px;">of</p><div class="clear"></div>
          <h3 class="grid_3 push_5" style="margin-left:-20px;">',$album_data['name'],'</h3><div class="clear"></div>
   ';
  
    $images = get_images_gallery($album_id);
      $maxcols = 4;
      $i = 0;

	   echo '<table class="grid_12 alpha omega" id="gallery_table">';
	   echo '<tr class="grid_12" style="margin-top:10px; margin-bottom:10px; margin-left:15px;">';
    foreach($images as $image){
	            if($i == $maxcols){
				   $i = 0;
				   echo'</tr><tr class="grid_12" style="margin-top:10px; margin-bottom:10px; margin-left:15px;">';
				}
	  echo '
	      <td class="grid_3 alpha">
	  <a href="admin/uploads/',$image['album'],'/',$image['id'],'.',$image['ext'],'" data-lightbox="image-1"><img src="admin/uploads/thumbs/'.$image['album'],'/', $image['id'],'.',$image['ext'],'" title="Uploaded',date(' D M Y/h:i',$image['timestamp']),'"alt="" height="250px" width="270px"/></a> 
	    </td>
	  ';  
	   $i++;
	
	
	}echo'</table>';
 
 
   
  include('template/footer.php');
?>