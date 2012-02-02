<?php
include('includes/sc-includes.php');
require_once 'databaseconnection.php';
//$dbh_handler=mysql_connect('localhost','root','');
//mysql_select_db("ims",$dbh_handler);

	if(isset($_POST['phpname']))
	{
		$name = $_POST['phpname'];
		$name=$stationary[$name];
		$q = mysql_query("SELECT * FROM sta WHERE item='$name'");
		$hint=0;
		while($row=mysql_fetch_array($q))
		{
			if($row['action']=="add")
			{
				$hint+=$row['no'];
			}
			else{$hint-=$row['no'];}
		}
		echo $hint;
	}
?>