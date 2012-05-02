<?php
session_start();
include('includes/sc-includes.php');
require_once 'databaseconnection.php';
if(!user_loggedin())
{
header('Location:index.php');
}

if(isset ($_GET['err']))
	{
        echo $_GET['err'];
    }
	
	
$t = $_GET['id'];
$no=substr($t,14,1);
//echo $no;
if ($no=='O') 
{
	$qu = mysql_query("SELECT * FROM oe WHERE idno = '$t'");
	while ($que = mysql_fetch_assoc($qu))
	{
		$art= $que['articles'];
		$id= $que['idno'];
		$fno= $que['fno'];
		$date= $que['date'];
		$sup=$que['supna'];
		$up=$que['up'];
		$of=$que['ofinch'];
		$rema=$que['remarks'];
	}
}
if ($no=='L') 
{
	$qu = mysql_query("SELECT * FROM le WHERE idno = '$t'");
	while ($que = mysql_fetch_assoc($qu))
	{
		$art= $que['articles'];
		$id= $que['idno'];
		$fno= $que['fno'];
		$date= $que['date'];
		$sup=$que['supna'];
		$up=$que['up'];
		$of=$que['ofinch'];
		$rema=$que['remarks'];
	}
}
if ($no=='F') 
{
	$qu = mysql_query("SELECT * FROM fu WHERE idno = '$t'");
	while ($que = mysql_fetch_assoc($qu))
	{
		$art= $que['articles'];
		$id= $que['idno'];
		$fno= $que['fno'];
		$date= $que['date'];
		$sup=$que['supna'];
		$up=$que['up'];
		$of=$que['ofinch'];
		$rema=$que['remarks'];
	}
}
$query = mysql_query("SELECT * FROM currentstatus WHERE idno = '$t'");
	while ($q= mysql_fetch_assoc($query))
	{
		$sta= $q['status'];
		$loc= $q['location'];
	}


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>update</title>
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
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript"></script>
</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div> 
       
        <img src="images/Untitled-4 copy.jpg" width="1023" height="193"/> <table width="957"><tr>
          <td width="682"><table width="957"><tr>
          <td width="682"><table width="943" height="41">
            <tr><td width="45"></td><td width="66"><a  href="main.php"><font size="+1" color="#99CCFF">Home</font></a></td>
            <td width="164"><a href="change.php"><font size="+1" color="#99CCFF">Change Password</font></a></td>
            <td width="107"><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></td>
            <td width="205"><a href="logout.php"><font size="+1" color="#99CCFF">Sign Out</font></a></td><td width="328"><form action="#" method="post">
    	            	<input name="search" type="text" id="textfield" value=""/>
        	            <input type="submit" name="Search" value="" alt="Search" id="button" title="Search" />
					</form></td></tr>
        </table></td></tr></table></td></tr></table>
           <marquee direction="left">
           <p><font size="+1">Inventory Managemant System &nbsp;&nbsp;  Department of Computer Science &nbsp;&nbsp; University of Jaffna.&nbsp;&nbsp; 	
           </font></p>
          </marquee></font></h1>
      </div> <!-- end of site_title -->
        
       
        
       
    
  </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
	
	



<div class="container">
  <div class="leftcolumn">
  <br />
  <br />
    <h2>update</h2>
    
    <br />



    <form action="update.php" method="post"  name="form1" id="form1">
    
    <table width="651" height="91" align="center">
	  <tr>
	    <td width="189">Article </td>
	  <td width="320"><input name="arti" type="text" class="required" id="arti" value="<?php echo $art; ?>" size="25" /></td></tr><tr>
	    <td width="189">Identification No </td>
	  <td width="320"><input name="id_no" type="text" class="required" id="id_nooe" value="<?php echo $id; ?>" size="25" /></td></tr>
      <tr>
	    <td width="189">Folio No</td>
	  <td width="320"><input name="f_no" type="text" class="required" id="f_nooe" value="<?php echo $fno; ?>" size="25" /></td></tr>
      <tr>
	    <td width="189">Date </td>
	  <td width="320"><input name="date" type="text" class="required" id="dateoe" value="<?php echo $date; ?>" size="25" /></td></tr>
      <tr>
	    <td width="189">Name of Suppliers</td>
	  <td width="320"><input name="nos" type="text" class="required" id="nos" value="<?php echo $sup; ?>" size="25" /></td></tr>
      <tr>
	    <td width="189">Unit price</td>
	  <td width="320"><input name="up" type="text" class="required" id="up" value="<?php echo $up; ?>" size="25" /></td></tr>
      <tr>
	    <td width="189">Officer in Charge</td>
	  <td width="320"><input name="off" type="text" class="required" id="off" value="<?php echo $of; ?>" size="25" />
</td></tr>
      
      <tr>
	    <td width="189">Remarks </td>
	  <td width="320"><textarea name="rem" id="rem" "><?php echo $rema; ?></textarea></td></tr>
      <tr>
	    <td width="189">Status</td>
	  <td width="320"><input name="status" type="text" class="required" id="status" value="<?php echo $sta; ?>" size="25" /></td></tr>
      <tr>
	    <td width="189">Location </td>
	  <td width="320"><input name="location" type="text" class="required" id="location" value="<?php echo $loc; ?>" size="25" /></td></tr>
      
      
      <tr>
	    <td width="189">&nbsp;</td>
	  <td width="320"><input type="submit" name="submit" id="submit" value="Update" /></td></tr></table>
    
	  <p>&nbsp;</p>
</form>



<table width="951" height="50">
  <tr><td width="231" height="44"></td>
<td width="226"><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td width="120"> <strong>&nbsp;&nbsp;&nbsp;<a href="invsearchme.php">Go Back</a></strong></td>
  <td width="354"></td>
</tr></table>

<div id="feedback">
		</div>


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