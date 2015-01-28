<?php
include 'init.php';

if(!logged_in()){
header('Location:index.php');
exit();
}
include 'template/header.php';
?>
<h3>Create Album</h3>
<?php

if(isset($_POST['album_name'], $_POST['album_description'], $_POST['event_type'])){
     
	 $album_name = $_POST['album_name'];
	 $album_description = $_POST['album_description'];
	 $event_type= $_POST['event_type'];
	 $errors = array();
	 
	 if(empty($album_name) || empty($album_description)) {
	 
	       $errors[] = 'Album name and description required';
	 
	 }  else{
			 if(strlen($album_name) > 55 || strlen($album_description) > 255){
			 
                 $errors[] = 'One or more fields contain too many charachters';			 
			  
			  
			 
			 }
	 }
    if(!empty($errors)){
	   foreach($errors as $error){
	     
	      echo $error; '<br>';
	   }
	
	}  else{
	
	    create_album($album_name,$album_description, $event_type);
	   header('Location:albums.php');
	   exit();
	}
}
?>

<form action="" method="post">
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
   <p>Whose<br><input type="text" name="album_name" maxlength = "55"/></p>
   <p>Tell a little interesting about the event:<br><textarea name="album_description" rows="6" cols="35" maxlength="255"></textarea></p>
   
   <p><input type="submit" value="create"> </p>
   </form>
<?php
include 'template/footer.php';

?>