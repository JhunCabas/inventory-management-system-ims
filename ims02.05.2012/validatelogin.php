<?php
include_once 'databaseconnection.php';

$username = $_POST['username'];
$password = $_POST['password'];


	if($username=="")
	{
		header('Location:index.php?err=<h3>Please enter username</h3>');
	}
	else if($password=="")
	{
		header("Location:index.php?err=<h3>Please enter password</h3>");
	}
	else
	{

	 if(auth($username,  md5($password))){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
    
		header("Location:main.php?err=<h3>You have been successfully <b>login</b> from the Inventory Management System</h3>");
	}	else{
   
		header("Location:index.php?err=<h3>Your username or password incorrect!</h3>");
	}
}

?>
