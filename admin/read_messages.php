<?php
   include('init.php');
   error_reporting(0);
   if(!logged_in()){
	   header('Location:index.php');
	   exit();
	}
   include('template/header.php');

  $query = mysql_query("SELECT * FROM `customers`");
echo '<table class="inbox_table"><thead>
  <td>#</td><td>Id No</td><td>Name</td><td>Email</td><td>Contact</td><td>Comment</td>
</thead>';
echo '<form method="post" action ="">';
$count = mysql_num_rows($query);
while($row = mysql_fetch_assoc($query)){
      $id = $row['id'];
	  $name = $row['name'];
	  $email = $row['email'];
	  $phone = $row['phone'];
	  $message = $row['message'];
	  
	echo '<tr><td><input name="checkbox[]" type="checkbox" id="checkbox[]" value="'.$id.'"></td><td>'.$id.'</td>
	</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$phone.'</td><td>'.$message.'</td></tr>
	'; 
    

	}
 ?>
<input name="delete" type="submit" id="delete" value="DELETE">
<?php
if(array_key_exists('delete',$_POST))
    {
    for($i=0;$i<$count;$i++)
     {
	  
    $query_id = $_POST['checkbox'][$i];
    $dels = mysql_query("DELETE FROM `customers` WHERE id='$id'");
       if($dels){
	 echo "<meta http-equiv=\"refresh\" content=\"0;URL=read_messages.php\">";
	      }
	 }

    }
'
</form>
</table>';

   include('template/footer.php');
?>