<?php
require_once 'databaseconnection.php';
	require_once('includes/functions.php'); 
	include('includes/sc-includes.php');
	$a=$_POST['articles'];
	$article=$articles[$a];
	//$dbh_handler=mysql_connect('localhost','root','');
	//mysql_select_db("ims",$dbh_handler);
	$id=$_POST['id_no'];
	$fno=$_POST['f_no'];
	$date=$_POST['date'];
	$nos=$_POST['nos'];
	$up=$_POST['up'];
	$off=$_POST['off'];
	$noa=$_POST['noa'];
	$rem=$_POST['rem'];
	$no=substr($id,19,22); 
	$str=substr($id,0,19);
	for($n = 0;$n < $noa; $n++)
	{ 
		if(strlen($no)<3&&$no<10){$no="00".$no;}
		else if(strlen($no)<3&&$no<100){$no="0".$no;}
		$id=$str.$no;
		$sql=mysql_query("INSERT INTO fu(articles,idno,fno,date,supna,up,ofinch,remarks)values('$article','$id','$fno','$date','$nos','$up','$off','$rem')");
		mysql_query("INSERT INTO currentstatus(idno,status,location)values('$id','in','CSC dept')");
		$no=$no+1;
	} 
	if (!$sql)
	{
	  die('Please entered the records' . mysql_error());
	}
	header("Location:fur.php?err=<h1>$noa records added </h1>");
?>