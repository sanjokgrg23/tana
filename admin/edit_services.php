<?php
include('init.php');
if(!logged_in()){
header('Location:index.php');
exit();
}
include('template/header.php');
        echo '<h3>EDIT SERVICES PAGE</h3>';
       if(isset($_POST['submit'])){
	       $id_sent = $_POST['id'];
		   $value_sent = $_POST['value'];
		   $value_sent = mysql_escape_string($value_sent);
	       $update_query = "UPDATE `services` SET description = '$value_sent' WHERE id = '$id_sent'";
		   $result_update = mysql_query($update_query);
		    if(!$result_update){
			  var_dump(mysql_error());
			  
			}else{
			   echo'Yes it has been updated';
			   header('Refresh: 4; url=index.php');
			}
	   }else{
    $query = "SELECT * FROM `services`";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)){
	      $id = $row['id'];
		  $value = $row['description'];
		echo '
		     <table>
			   <form method="post" action="">
			     <tr></td><input type="hidden" name="id" value="',$id,'"</td></tr>
				 <tr><td><textarea name="value" cols="65" rows="15">',$value,'</textarea></td>
			     <td><input type="submit" name="submit" value="Edit"></td></tr>
			   </form>
			 </table>
		';
	}
  }

include('template/footer.php');
?>