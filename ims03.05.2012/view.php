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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Inventory</title>
<meta name="keywords" content="blue, marble, design, theme, web, free templates, website templates, CSS, HTML" />
<meta name="description" content="Blue Marble Theme is a free website template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:600,
		pauseTime:2400,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, 
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.7, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div > 
       
        <img src="images/Untitled-4 copy.jpg" width="1023" height="193"/> <table width="957"><tr>
          <td width="682"><table width="943" height="41">
            <tr><td width="45"></td><td width="66"><a  href="main.php"><font size="+1" color="#99CCFF">Home</font></a></td>
            <td width="161"><a href="change.php"><font size="+1" color="#99CCFF">Change Password</font></a></td>
            <td width="107"><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></td>
            <td width="208"><a href="logout.php"><font size="+1" color="#99CCFF">Sign Out</font></a></td><td width="328"><form action="#" method="post">
    	            	<input name="search" type="text" id="textfield" value=""/>
        	            <input type="submit" name="Search" value="" alt="Search" id="button" title="Search" />
					</form></td></tr>
        </table></td></tr></table>
           <marquee direction="left">
           <p><font size="+1">Inventory Managemant System &nbsp;&nbsp;  Department of Computer Science &nbsp;&nbsp; University of Jaffna.&nbsp;&nbsp; 	
           </font></p>
          </marquee></font></h1>
      </div> <!-- end of site_title -->
        
       
        
       
    
  </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
 <p>&nbsp;</p>
 <center>
   <h1>View Inventory</h1></center>
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
<!--<A HREF="javascript:window.print()">Click to Print This Page</A>-->
<br>
<A HREF="javascript:window.print()">
<IMG SRC="images/print.jpg" BORDER="0" /></A>
<br>
<!--<FORM>
<INPUT TYPE="button" onClick="window.print()">
</FORM>-->
<p>&nbsp; </p>

	<p>&nbsp; </p>
	<center><table><tr><td><img  align="right" src="images/lft.png" width="76" height="27" /></td><td><strong><a href="invsearch.php">Go to Inventory Search</a></strong></td></tr></table></center>
          <div id="templatemo_content">
            
            
            
            
            
            <div class="cleaner">
            </div>
            
          </div>
          
          
          <div class="cleaner">
            
<p><center>
  <p>&nbsp;</p>
  <p>Copyright © 2011 Group-04 Level-3G Department of Computer Science University of Jaffna, Sri Lanka.</p>
</center></p>
          </div>
</div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->

</body>
</html>

