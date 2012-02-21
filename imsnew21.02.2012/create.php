<?php
session_start();
require_once 'databaseconnection.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password = $_POST['password'];
$encrypted_password=md5($password);
$ulevel = 2;

 require_once('recaptchalib.php');
 $privatekey = "6LcC5swSAAAAACdbU7djqx8nGTRR8sCmDdv7ZR9j";
 $resp = recaptcha_check_answer ($privatekey,
                                 $_SERVER["REMOTE_ADDR"],
                                 $_POST["recaptcha_challenge_field"],
                                 $_POST["recaptcha_response_field"]);
 if (!$resp->is_valid) {
  header("Location:signup.php?err=<h2>CAPTCHA was entered incorrectly</h2>");
   // What happens when the CAPTCHA was entered incorrectly
  //die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
        //"(reCAPTCHA said: " . $resp->error . ")");
		//header("Location:cap.php");
 } else {
   // Your code here to handle a successful verification
  $sql=mysql_query("INSERT INTO users(firstname,lastname,email,username,password,ulevel) VALUES ('$firstname','$lastname','$email','$username','$encrypted_password','$ulevel')");
if (!$sql)
  {
  die('Invalid query: '. mysql_error());
  }


header("Location:index.php?err=<h2>Congratulations! You have successfully Created Your Account.</h2>");

 }

?>

