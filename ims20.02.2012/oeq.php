<?php
include('includes/sc-includes.php');
require_once 'databaseconnection.php';
//$dbh_handler=mysql_connect('localhost','root','');
//mysql_select_db("ims",$dbh_handler);

	if(isset($_POST['phpname']))
	{
		$name = $_POST['phpname'];
		//if(strlen($name) > 0)
		//{
			$name=$articles[$name];
			//echo $name;
			$q = mysql_query("SELECT * FROM oe WHERE articles='$name'");
			
			$hint=000;
			while($row=mysql_fetch_array($q))
			{
				
				//echo $row['idno'];
				$no=substr($row['idno'],20,23);
				{
					//echo $no;
					if($hint<$no)
					{
						$hint=$no;
					}
				}
			}
		//}
		echo $hint;
	}
?>