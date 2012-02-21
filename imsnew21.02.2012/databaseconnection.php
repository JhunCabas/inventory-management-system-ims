<?php
include_once 'config.php';

$con = mysql_connect($host, $user, $password);

if (!$con) {
    echo "Sorry Unable to connect with database " . mysql_error();
}

if (!mysql_select_db($dbname)) {
    die("Cannot connect to the Database " . mysql_error($link));
}

function auth($username, $password) {
    $result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }
    if (mysql_num_rows($result) == 1) 
	{
        mysql_free_result($result);
        return true;
    } 
	else 
	{
        mysql_free_result($result);
        return false;
    }
}

function user_loggedin() {
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        if (!auth($_SESSION['username'], $_SESSION['password'])) {
            return true;
        } else {
            return false;
        }
    }
}
function admin_loggedin() 
	{
		$a=md5(123);
		$username=$_SESSION['username'];
		$password=md5($_SESSION['password']);
		$results = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' ");
		while ($row = mysql_fetch_array($results))
		{	 
			$ulevel=$row['ulevel'];
		}
		
		if ($ulevel==1) {
			return true;
		} 
		else{
			return false;
			
		}
	}
?>