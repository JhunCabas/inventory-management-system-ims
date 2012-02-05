<?php require_once('includes/functions.php');
 require_once 'databaseconnection.php';
//$dbh_handler=mysql_connect('localhost','root','');
//mysql_select_db("ims",$dbh_handler);
if (isset($_GET['user'])) {
mysql_query("DELETE FROM users WHERE user_id = ".$_GET['user']."");
header("Location:usermanage.php?err=<h2>User Deleted</h2>");
//redirect('User Deleted',"users.php");
}
?>