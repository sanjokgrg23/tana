<?php
include('init.php');
include('template/header.php');
if(!logged_in()){
header('Location:index.php');
exit();
}else{
     if(isset($_POST['submit'])){
	     
		 $update_value = $_POST['story'];
	     $id = $_POST['id'];
		 $query = "UPDATE `our_story` SET story = '$update_value' WHERE id ='$id'";
		 $result = mysql_query($query);
	    
	          if(!$result){
			     echo "Diffculty updating your query";
			  }else{
			  
			    echo"Thank you, your homepage has been updated";
			    header("refresh:2;url=index.php");
			  }
	 }elseif(isset($_POST['submit1'])){
	     
		 $update_value = $_POST['about'];
	     $id = $_POST['id'];
		 $query = "UPDATE `about` SET description = '$update_value' WHERE id ='$id'";
		 $result = mysql_query($query);
	    
	          if(!$result){
			     echo "Diffculty updating your query";
			  }else{
			  
			    echo"Thank you, your homepage has been updated";
			    header("refresh:2;url=index.php");
			  }
	 }



}
?>