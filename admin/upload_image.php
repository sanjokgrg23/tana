<?php
include 'init.php ';

if(!logged_in()){
   header('Location:index.php;');
   exit();
}
include 'template/header.php';
?>
<h3>Upload Image</h3>


<?php
 if(isset($_FILES['image'], $_POST['album_id'])) {
        $image_name = $_FILES['image']['name'];
		$image_size = $_FILES['image']['size'];
		$image_temp = $_FILES['image']['tmp_name'];
		
		
	$allowed_ext = array('jpg','jpeg','png','gif');
     $image_ext = strtolower(end(explode('.',$image_name)));
     $album_id = $_POST['album_id'];
       
	   $errors = array();
      if(empty($image_name) || empty($album_id)){
	         $errors[] = 'something is missing';
	  
	  }else {
	        if(in_array($image_ext, $allowed_ext) == false){
			    $errors[] = 'File type not allowed';
		  	 } 
	        if($image_size > 6291456){
			
			    $errors[] = 'maximum file size is 2MB';
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

 $albums = get_albums();
if(empty($albums)){
   echo '<p>You dont have any albums. <a href="create_album.php">Create an album</a></p>';
}else{
 ?>
     <form action="" method="post" enctype="multipart/form-data">
	    <p>Choose a file:<br><input type="file" name ="image"></p>
	    <p>Choose an album:<br>
		<select name="album_id">
		      <?php
		        foreach($albums as $album){
				   echo '<option value="',$album['id'],'">', $album['name'],'</option>';
				}
			  
			  ?>
			  
		</select>
		  </p>
		  <p><input type="submit" value="upload"></p>
	 </form>
 
 
<?php
}
include 'template/footer.php';

?>