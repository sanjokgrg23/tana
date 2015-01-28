<?php
include 'init.php';
    if(!logged_in()){
	   header('Location:index.php');
	   exit();
	}
	
	  if(!isset($_GET['album_id']) || empty($_GET['album_id']) || album_check($_GET['album_id']) === false){
	        header('Location:albums.php');
		      exit();
	  }
	
include 'template/header.php';
   
   $album_id = $_GET['album_id'];
   $album_data = album_data($album_id, 'name','description','event');
   echo '<h3>',$album_data['name'],'</h3>',$album_data['event'],'<p>',$album_data['description'],'</p>';
   
   if(isset($_FILES['image'])) {
        $image_name = $_FILES['image']['name'];
		$image_size = $_FILES['image']['size'];
		$image_temp = $_FILES['image']['tmp_name'];
		
		
	$allowed_ext = array('jpg','jpeg','png','gif');
     $image_ext = strtolower(end(explode('.',$image_name)));
     $album_id = $_GET['album_id'];
       
	   $errors = array();
      if(empty($image_name) || empty($album_id)){
	         $errors[] = 'something is missing';
	  
	  }else {
	        if(in_array($image_ext, $allowed_ext) == false){
			    $errors[] = 'File type not allowed';
		  	 } 
	        if($image_size > 6291456){
			
			    $errors[] = 'maximum file size is 6MB';
			}
	        if(album_check($album_id) == false){
			    $errors[] = 'Couldn\'t upload to that album';
			       
			}
	  
	  }
    if(!empty($errors)){
	    foreach($errors as $error){
		      echo $error, '<br>';
		}
	}else{
	  upload_image($image_temp, $image_ext, $album_id);
	  header('Location:view_album.php?album_id='.$album_id);
	  exit();
	}
 
 }
   $maxcols = 6;
   $i = 0;
   $images = get_images($album_id);
 
   if(empty($images)){
       echo 'There are no images in this album';
    ?>
	    <form action="" method="post" enctype="multipart/form-data">
	    <p><br><input type="file" name ="image"></p>
		  <p><input type="submit" value="upload"></p>
	 </form>
	  
	<?php
   }else{?>
      <form action="" method="post" enctype="multipart/form-data">
	    <p>Choose a file:<br><input type="file" name ="image"></p>
		  <p><input type="submit" value="upload"></p>
	 </form>
	 
	 <?php
      echo '<table>';
    foreach($images as $image){
	     if($i == $maxcols){
		      $i = 0;
			  echo '</tr><tr>';
		 }
	  echo '
	    <td>
	  <a href="./uploads/',$image['album'],'/',$image['id'],'.',$image['ext'],'"><img src="./uploads/thumbs/'.$image['album'],'/', $image['id'],'.',$image['ext'],'" title="Uploaded',date(' D M Y/h:i',$image['timestamp']),'"alt="" height="100px" width="100px"/></a>  [<a href="delete_image.php?image_id=',$image['id'],'">x</a>]
	    </td>
	  ';  
	   $i++;
	
	
	}echo'</table>';
 
 
  }

include 'template/footer.php';
?>