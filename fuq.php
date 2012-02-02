<?php
include('includes/sc-includes.php');
//$dbh_handler=mysql_connect('localhost','root','');
//mysql_select_db("ims",$dbh_handler);
require_once 'databaseconnection.php';

	if(isset($_POST['phpname']))
	{
		$name = $_POST['phpname'];
		$name=$articles[$name];
		$q = mysql_query("SELECT * FROM fu WHERE articles='$name'");
		$hint=000;
		while($row=mysql_fetch_array($q))
		{
			$no=substr($row['idno'],20,23);
			if($hint<$no)
			{
				$hint=$no;
			}
		}
		echo $hint;
	}
?>