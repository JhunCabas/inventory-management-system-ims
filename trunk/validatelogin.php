<?php
include_once 'databaseconnection.php';

$username = $_POST['username'];
$password = $_POST['password'];


	if($username=="")
	{
		header('Location:index.php?err=<h1>Please enter username</h1>');
	}
	else if($password=="")
	{
		header("Location:index.php?err=<h1>Please enter password</h1>");
	}
	else
	{

	 if(auth($username,  md5($password))){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
    
		header("Location:main.php?err=<h1>You have been successfully <b>login</b> from the Inventory Management System</h1>");
	}	else{
   
		header("Location:index.php?err=<h1>Your username or password incorrect!</h1>");
	}
}

?>
