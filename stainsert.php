<?php
	require_once('includes/functions.php'); 
	include('includes/sc-includes.php');
	require_once 'databaseconnection.php';
	$a=$_POST['itemssta'];
	$item=$stationary[$a];
	//$dbh_handler=mysql_connect('localhost','root','');
	//mysql_select_db("ims",$dbh_handler);
	$date=$_POST['datesta'];
	$no=$_POST['noista'];
	$action=$_POST['actsta'];
	$bal=$_POST['balsta'];
	$sql=mysql_query("INSERT INTO sta(item,date,no,action,balance)values('$item','$date','$no','$action','$bal')");
	if (!$sql)
	{
	  die('Please entered the records' . mysql_error());
	}
	header("Location:stat.php?err=<h1>$noa records added </h1>");
?>