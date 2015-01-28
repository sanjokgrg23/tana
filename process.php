<?php
include('template/header-page.php');
include('admin/init.php');
 if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $errors = array();
      if(empty($name) || empty($phone) || empty($email) || empty($message)){
               echo '<p class = "grid_3 push_6" id="contact" style="color:red; font-size:19px;">Something is missing !</p>';
			   $errors[] = 'Album name and description required';
			   
         }else{
		     $query = "INSERT INTO `customers` VALUES('','$name','$phone','$email','$message')";
		     mysql_query($query);
		 
 

echo'<div class="grid_10 push_1" id="contact">
   <h2 class="grid_2 push_4">Thank you</h2><div class="clear"></div>
   <p class="grid_8 push_1">Thank you very much for contacting us, we will get back to you as soon as possible</p>
     
 </div>';


}}
include('template/footer.php');
?>