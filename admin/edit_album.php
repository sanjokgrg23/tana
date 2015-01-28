<?php
include'init.php';

if(!logged_in()){
  header('Location:index.php');
  exit();

}
if(!isset($_GET['album_id']) ||empty($_GET['album_id']) || album_check($_GET['album_id']) === false){
   header ('Location:albums.php');
   exit();

}


include 'template/header.php';
?>

<h3>Edit Album</h3>
<?php
$album_id = $_GET['album_id'];

$album_data = album_data($album_id,'name','description');
  if(isset($_POST['album_name'], $_POST['album_description'])){
  
     $album_name = $_POST['album_name'];
	 $album_description = $_POST['album_description'];
	 $event  = $_POST['event_type'];
	      $errors = array();
		  if(empty($album_name) || empty($album_description)){
		  
		    $errors[] = 'Album name and description required';
             			
		  }else{
			  
			  if((strlen($album_name) > 55) || strlen($album_description)> 255){
				 $errors[] = 'one or more fields contain too many characters';
			  }
		  
		  }
					if(!empty($error)){
					    foreach($errors as $error){
						  echo $error, '<br>';
						}
					}  else {
					       edit_album($album_id,$album_name,$album_description,$event);
					        header('Location:albums.php');
							exit();
					
					}
  }
  
?>

<form action ="?album_id=<?php echo $album_id?>" method ="post">
   <p>Name: <br><input type="text" name="album_name" maxlength = "55" value="<?php echo $album_data['name'];?>" /></p>
   <p>Description:<br><textarea name="album_description" rows="6" cols="35" maxlength="255"><?php echo $album_data['description']; ?></textarea></p>
    <p>Event type: <br><select name="event_type">
        <option value="Graduation">Graduation</option>
		<option value="Bachelorette">Bachelorette</option>
		<option value="Birthday Party">Birthday Party</option>
		<option value="Cocktail Party">Cocktail Party</option>
		<option value="Entertainment">Entertainment</option>
		<option value="Corporate Dinner">Corporate dinner</option>
		<option value="Anniversary">Anniversary</option>
		<option value="Child Dedication">Child Dedications</option>
		<option value="Naming Ceremonies">Naming Ceremonies</option>
		<option value="Thanksgiving">Thanksgiving</option>
		<option value="Product Launch">Product Launch</option>
		<option value="Magazine Launch">Magazine Launch</option>
		<option value="Album Launch">Album Launch</option>
   </select>
   <p><input type="submit" value="Edit"> </p>
   </form>


<?php
include 'template/footer.php';


?>