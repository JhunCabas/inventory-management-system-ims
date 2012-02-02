<?php 
session_start();
require_once 'databaseconnection.php';

$username = $_POST['username'];
$oldpassword = $_POST['password'];
$encrypted_password = md5($oldpassword);
$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];

$result = mysql_query("SELECT password FROM users WHERE username = '$username' AND password = '$encrypted_password'");
if(!$result) 
{ 
    header("Location:change.php?err=<h1>You entered an incorrect password.</h1>");
} 

if(mysql_num_rows($result)){
    if($newpassword == $confirmpassword)
	{
		$encriptednewpassword = md5($newpassword);
        $sql=mysql_query("UPDATE users SET password='$encriptednewpassword' where username='$username'");        
        if($sql) 
        { 
            header("Location:main.php?err=<h1>Congratulations! You have successfully changed your password.</h1>"); 
        }
        else
        {
            // In case when problem while updating your new password
			header("Location:change.php?err=<h1>Not updated your new password.</h1>");
        }       
    } else {
        // In case when new-password and retype-password do not match
		header("Location:change.php?err=<h1>The new password and confirm new password fields must be the same.</h1>");
    }
} else {
    // In case of you have not correct User name and password
	header("Location:change.php?err=<h1>Your username or password incorrect!</h1>");
}

?>