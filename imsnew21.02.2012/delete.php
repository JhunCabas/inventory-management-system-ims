<?php require_once('includes/functions.php');
 require_once 'databaseconnection.php';
if (isset($_GET['user'])) {
mysql_query("DELETE FROM users WHERE user_id = ".$_GET['user']."");
header("Location:usermanage.php?err=<h2>User Deleted</h2>");

}
?>