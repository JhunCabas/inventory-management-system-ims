<?php
session_start();
require_once 'databaseconnection.php';
	require_once('includes/functions.php'); 
	include('includes/sc-includes.php');
	$a=$_POST['articles'];
	$article=$articles[$a];
	$id=$_POST['id_no'];
	$fno=$_POST['f_no'];
	$date=$_POST['date'];
	$nos=$_POST['nos'];
	$up=$_POST['up'];
	$off=$_POST['off'];
	$noa=$_POST['noa'];
	$rem=$_POST['rem'];
	$no=substr($id,20,23); 
	$str=substr($id,0,20);
	for($n = 0;$n < $noa; $n++)
	{ 
		if(strlen($no)<3&&$no<10){$no="00".$no;}
		else if(strlen($no)<3&&$no<100){$no="0".$no;}
		$id=$str.$no;
		$sql=mysql_query("INSERT INTO le(articles,idno,fno,date,supna,up,ofinch,remarks)values('$article','$id','$fno','$date','$nos','$up','$off','$rem')");
		mysql_query("INSERT INTO currentstatus(idno,status,location)values('$id','in','CSC dept')");
		$no=$no+1;
	} 
	if (!$sql)
	{
	  die('Please entered the records' . mysql_error());
	}
	header("Location:lab.php?err=<h3>$noa records added </h3>");
?>