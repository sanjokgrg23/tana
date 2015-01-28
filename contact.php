<?php
include('template/header-page.php');
include('admin/init.php');
?>
<div class="grid_10 push_1" id="contact">
   <h2 class="grid_2 push_4">Contact us</h2><div class="clear"></div>
   <p class="grid_8 push_1">We always love to cater for your needs. Please feel free to tell us what you need or your much appreciated feedbacks</p>
   <section class="grid_6 push_2" id="contact_form">
     
	    <form method="post" action="process.php">
	      <table>
		    <tr>
			   <td>Full Name</td><td><input class="input" type="text" name="name" width="200px"></td></tr>
			   <tr><td>Phone</td><td><input class="input" type="text" name="phone"></td></tr>
			   <tr><td>Email</td><td><input class="input" type="text" name="email"></td></tr>
			   <tr><td>Message</td><td><textarea name="message"></textarea></td></tr>
			   <tr><td><input type="submit" name="submit" value="send" style="font-family:arial;"></td> </tr>
          </table>		  
		</form>
	 
   </section>
 </div>
<?php
include('template/footer.php');
?>