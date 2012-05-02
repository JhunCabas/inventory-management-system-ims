<?php
session_start();
require_once 'databaseconnection.php';


$article=$_POST['arti'];
$id=$_POST['id_no'];
$fno=$_POST['f_no'];
$date=$_POST['date'];
$nos=$_POST['nos'];
$up=$_POST['up'];
$off=$_POST['off'];
$rem=$_POST['rem'];
$sta=$_POST['status'];
$loc=$_POST['location'];
//echo "$id";//echo "$loc";
$no=substr($id,14,1);
//echo $no;
if ($no=='L') 
{
	$query = "UPDATE le SET  
		articles ='".trim($_POST['arti'])."',
		fno='".trim($_POST['f_no'])."',
		date='".trim($_POST['date'])."',
		supna ='".trim($_POST['nos'])."',
		up= '".trim($_POST['up'])."',
		ofinch = '".trim($_POST['off'])."',
		remarks = '".trim($_POST['rem'])."'
		 WHERE idno = '".trim($_POST['id_no'])."'";
		
	$sql=mysql_query($query);
	
}
if ($no=='O') 
{
	$query = "UPDATE oe SET 
		articles ='".trim($_POST['arti'])."',
		fno='".trim($_POST['f_no'])."',
		date='".trim($_POST['date'])."',
		supna ='".trim($_POST['nos'])."',
		up= '".trim($_POST['up'])."',
		ofinch = '".trim($_POST['off'])."',
		remarks = '".trim($_POST['rem'])."'
		 WHERE idno = '".trim($_POST['id_no'])."'";
	
	$sql=mysql_query($query);
}
if ($no=='F') 
{
	$query = "UPDATE fu SET 
		articles ='".trim($_POST['arti'])."',
		fno='".trim($_POST['f_no'])."',
		date='".trim($_POST['date'])."',
		supna ='".trim($_POST['nos'])."',
		up= '".trim($_POST['up'])."',
		ofinch = '".trim($_POST['off'])."',
		remarks = '".trim($_POST['rem'])."'
		 WHERE idno = '".trim($_POST['id_no'])."'";
	
	$sql=mysql_query($query);
}
$query = "UPDATE currentstatus SET 
		status ='".trim($_POST['status'])."',
		location='".trim($_POST['location'])."'
		 WHERE idno = '".trim($_POST['id_no'])."'";
		
$sql=mysql_query($query);

if (!$sql)
  {
  die('Please entered the records' . mysql_error());
  }
header("Location:invsearchme.php?err=<h3>Records updated </h3>");
?>