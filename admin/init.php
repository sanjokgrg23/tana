<?php
ob_start();
session_start();

$host = "mysql4.000webhost.com";
$database = "a8493134_tana";
$db_user = "a8493134_flaw";
$db_password = "jklasd234";
/*mysql_connect('localhost','root','');
mysql_select_db('tana');*/

mysql_connect($host,$db_user,$db_password);
mysql_select_db($database);


include('func/user.func.php');

include('func/album.func.php');

include('func/image.func.php');
include('func/thumb.func.php');
 
?>