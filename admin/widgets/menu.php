<a href="index.php">Home</a> / 
<?php
if(!logged_in()){
?>
<a href="register.php">Register</a>
<?php
}

else {
?>

<a href="logout.php">Log out</a> /
<a href="create_album.php">Create Album</a> /
<a href="albums.php">Albums</a>/
<a href="upload_image.php">Upload Image</a> /
<a href="read_messages.php">Read Messages</a> /
<a href="edit_contact.php">Edit Contact Page</a> /
<a href="edit_services.php">Edit Services Page</a>

<?php 
}
?>