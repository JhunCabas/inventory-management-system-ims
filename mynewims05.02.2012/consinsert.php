<?php
	require_once('includes/functions.php'); 
	include('includes/sc-includes.php');
	require_once 'databaseconnection.php';
	$a=$_POST['itemscon'];
	$item=$consumables[$a];
	//$dbh_handler=mysql_connect('localhost','root','');
	//mysql_select_db("ims",$dbh_handler);
	$date=$_POST['datecon'];
	$no=$_POST['noicon'];
	$action=$_POST['act'];
	$bal=$_POST['balcon'];
	$sql=mysql_query("INSERT INTO cons(item,date,no,action,balance)values('$item','$date','$no','$action','$bal')");
	if (!$sql)
	{
	  die('Please entered the records' . mysql_error());
	}
	header("Location:consum.php?err=<h2>$noa records added </h2>");
?>