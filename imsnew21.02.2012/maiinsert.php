<?php
	require_once('includes/functions.php'); 
	include('includes/sc-includes.php');
	require_once 'databaseconnection.php';
	$a=$_POST['itemsmai'];
	$item=$maintenance[$a];
	
	$date=$_POST['datemai'];
	$no=$_POST['noimai'];
	$action=$_POST['actmai'];
	$bal=$_POST['balmai'];
	$sql=mysql_query("INSERT INTO mai(item,date,no,action,balance)values('$item','$date','$no','$action','$bal')");
	if (!$sql)
	{
	  die('Please entered the records' . mysql_error());
	}
	header("Location:mainten.php?err=<h2>$noa records added </h2>");
?>