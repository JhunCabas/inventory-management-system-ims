<?php
session_start();
require_once 'databaseconnection.php';
include('includes/sc-includes.php');
	
if(!user_loggedin())
{
header('Location:index.php');
}
?>

<?php
    if(isset ($_GET['err']))
	{
        echo $_GET['err'];
    }
?>


<html>

 <p>&nbsp;</p>
 <center>
   <h1>Inventory</h1></center>
   
   
<?php
require_once 'databaseconnection.php';
$t = $_GET['id'];
if($t=='oe'||$t=='le'||$t=='fu'){
if($t=='oe')
{
$result=mysql_query("SELECT * FROM oe");
}
else if ($t=='le')
{
$result=mysql_query("SELECT * FROM le");
}
else if ($t=='fu')
{
$result=mysql_query("SELECT * FROM fu");
}
echo "<table border='1' align='center'>
<tr>
<th>Articles</th>
<th>Identification No</th>
<th>Folio No</th>
<th>Date </th>
<th>Name of suppliers</th>
<th>Unit Price</th>
<th>Officer in Charge</th>
<th>Remarks</th>
</tr>";


while($row=mysql_fetch_array($result))
{
	echo "<tr>";
  echo "<td>" . $row['articles'] . "</td>";
  echo "<td>" . $row['idno'] . "</td>";
  echo "<td>" . $row['fno'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['supna'] . "</td>";
  echo "<td>" . $row['up'] . "</td>";
  echo "<td>" . $row['ofinch'] . "</td>";
  echo "<td>" . $row['remarks'] . "</td>";
  echo "</tr>";
  
}
echo "</table>";
}
else if($t=='con'||$t=='sta'||$t=='mai'){
if($t=='con')
{
$result=mysql_query("SELECT * FROM cons");
}
else if ($t=='sta')
{
$result=mysql_query("SELECT * FROM sta");
}
else if ($t=='mai')
{
$result=mysql_query("SELECT * FROM mai");
}
echo "<table border='1' align='center'>
<tr>
<th>Articles</th>
<th>Date </th>
<th>Quantity</th>
<th>Action</th>
<th>Balance</th>
</tr>";


while($row=mysql_fetch_array($result))
{
	echo "<tr>";
  echo "<td>" . $row['item'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['no'] . "</td>";
  echo "<td>" . $row['action'] . "</td>";
  echo "<td>" . $row['balance'] . "</td>";
echo "</tr>";
  
}
echo "</table>";
}
?>

<p>&nbsp; </p>

	<p>&nbsp; </p>
	<center><table><tr><td></td><td><strong><A HREF="javascript:window.print()">
<IMG SRC="images/print.jpg" BORDER="0" /></A></strong></td></tr></table></center>
          
</html>

