<?php
include('includes/sc-includes.php');
require_once 'databaseconnection.php';
	if(isset($_POST['phpname']))
	{
		$name = $_POST['phpname'];
		$name=$consumables[$name];
		$q = mysql_query("SELECT * FROM cons WHERE item='$name'");
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