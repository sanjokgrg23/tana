<?php
error_reporting(0);
 include('init.php');
 if(!(logged_in())){
 header('location:index.php');
  }
 
 include('template/header.php');
  ?>
   <p><a href="edit_contact.php?name=ourstory">Edit Our Story</a>
   </p>
   <p><a href="edit_contact.php?name=about">Edit About us</a>

   </p>
 <?php
     $name = $_GET['name'];
	  if($name == 'ourstory'){
	       $query = "SELECT * FROM `our_story`";
		   $result = mysql_query($query);
		   while($row = mysql_fetch_assoc($result)){
		     $id = $row['id'];    
		     $story = $row['story'];
		   }
		   echo'<table>
		             <form method="post" action="edit_contact_process.php">
					     <tr></td>EDIT OUR STORY</td></tr>
						 <tr><td><input type="hidden" name="id" value="',$id,'"></td></tr>
						 <tr><td><textarea name="story" cols="45" rows="15">',$story,'</textarea></tr>
						 <tr><td><input type="submit" name="submit" value="Edit"></td></tr>
					 </form>
		        </table>
		   ';
	    }elseif($name == 'about'){
	       $query = "SELECT * FROM `about`";
		   $result = mysql_query($query);
		   while($row = mysql_fetch_assoc($result)){
		     $id = $row['id'];    
		     $story = $row['description'];
		   }
		   echo'<table>
		             <form method="post" action="edit_contact_process.php">
					     <tr></td>EDIT ABOUT</td></tr>
					     <tr><td><input type="hidden" name="id" value="',$id,'"></td></tr>
						 <tr><td><textarea name="about" cols="45" rows="15">',$story,'</textarea></tr>
						 <tr><td><input type="submit" name="submit1" value="Edit"></td></tr>
					 </form>
		        </table>';
				}
   include('template/footer.php');
   ?>