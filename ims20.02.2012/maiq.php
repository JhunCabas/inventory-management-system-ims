<?php
include('includes/sc-includes.php');
//$dbh_handler=mysql_connect('localhost','root','');
//mysql_select_db("ims",$dbh_handler);
require_once 'databaseconnection.php';
	if(isset($_POST['phpname']))
	{
		$name = $_POST['phpname'];
		$name=$maintenance[$name];
		$q = mysql_query("SELECT * FROM mai WHERE item='$name'");
		$hint=0;
		while($row=mysql_fetch_array($q))
		{
			if($row['action']=="received")
			{
				$hint+=$row['no'];
			}
			else{$hint-=$row['no'];}
		}
		echo $hint;
	}
?>