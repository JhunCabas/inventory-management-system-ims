<?php
session_start();
require_once 'databaseconnection.php';
require_once('includes/functions.php'); 
include('includes/sc-includes.php');
$a=$_POST['articles'];
$article=$articles[$a];
/*echo "artic is :  ".$article."<br/>";
echo"id no :  ".$_POST['id_no']."<br/>";
echo"folio no : ".$_POST['f_no']."<br/>";
echo"date is  :".$_POST['date']."<br/>";
echo"supplier  :".$_POST['nos']."<br/>";
echo"unit price  :".$_POST['up']."<br/>";
echo"officer incharge  :".$_POST['off']."<br/>";
echo"no of articles  :".$_POST['noa']."<br/>";
echo"remarks  :".$_POST['rem']."<br/>";*/

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
$no=substr($id,20,23); 
$str=substr($id,0,20);
//echo $no."<br>";
//echo $str."kk<br>";
for($n = 0;$n < $noa; $n++)
{ 
	//echo strlen($no);
	if(strlen($no)<3&&$no<10){$no="00".$no;}
	else if(strlen($no)<3&&$no<100){$no="0".$no;}
	//echo $no."<br>";
	//echo $str."<br>";
	$id=$str.$no;
	//echo $id."<br>";
	$sql=mysql_query("INSERT INTO oe(articles,idno,fno,date,supna,up,ofinch,remarks)values('$article','$id','$fno','$date','$nos','$up','$off','$rem')");
	mysql_query("INSERT INTO currentstatus(idno,status,location)values('$id','in','CSC dept')");
	$no=$no+1;
} 

if (!$sql)
  {
  die('Please entered the records' . mysql_error());
  }
header("Location:office.php?err=<h2>$noa records added </h2>");
?>