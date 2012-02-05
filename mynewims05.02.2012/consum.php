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
<title>Consumable</title>
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
<script type="text/javascript">
</script>
</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div> 
       
        <img src="images/Untitled-4 copy.jpg" width="1023" height="193"/> <table width="957"><tr>
          <td width="682"><table width="957"><tr>
          <td width="682"><table width="943" height="41">
            <tr><td width="45"></td><td width="66"><a  href="main.php"><font size="+1" color="#99CCFF">Home</font></a></td>
            <td width="166"><a href="change.php"><font size="+1" color="#99CCFF">Change Password</font></a></td>
            <td width="99"><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></td>
            <td width="211"><a href="logout.php"><font size="+1" color="#99CCFF">Sign Out</font></a></td><td width="328"><form action="#" method="post">
    	            	<input name="search" type="text" id="textfield" value=""/>
        	            <input type="submit" name="Search" value="" alt="Search" id="button" title="Search" />
					</form></td></tr>
        </table></td></tr></table></td></tr></table>
           <marquee direction="left">
           <p>&nbsp;</p>
           <p><font size="+1">Inventory Managemant System &nbsp;&nbsp;  Department of Computer Science &nbsp;&nbsp; University of Jaffna.&nbsp;&nbsp; 	
           </font></p>
          </marquee></font></h1>
      </div> <!-- end of site_title -->
        
       
        
       
    
  </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
    <center>
<form id="form14" name="form14" method="post" action="">
  </form><table width="747" background="templatemo_content.jpg">
    <tr><td width="739" height="54">

<h2><center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font face="Times New Roman, Times, serif">Consumable</font></p>
</center></h2></td></tr><tr>
  <td><form action="consinsert.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
<table width="705" height="354"border="0"  align="center" >
 <td width="145" height="45">&nbsp;&nbsp;<h5><img  src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Item Name</font></h5></td>
    <td width="200">
      <label for="no"></label><select id="itemscon" name="itemscon" onChange="showState(this.value)">

<?php foreach ($consumables as $key => $value) { ?>
                          <option value="<?php echo $key; ?>" <?php //selected($key,$row_contact['contact_country']); ?>><?php echo $value; ?></option>
<?php } ?>

       
                        </select>    </td>
    <td width="123">&nbsp;&nbsp;<h6><img  src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Date</font></h6></td>
    <td width="200">
      <label for="articles"></label>
      <input name="datecon" type="text" class="required" id="datecon" value="<?php //echo $row_contact['contact_last']; ?>" size="25" />   </td>
  </tr>
  <tr>
    <td height="46">&nbsp;&nbsp;<h6><img  src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">No of item</font></h6></td>
    <td><input name="noicon" type="number"  min="1" max="999" class="required" id="noicon" " size="25" /></td>
    <td>&nbsp;&nbsp;<h6><img  src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Balance</font></h6></td>
    <td>
      <label for="folio"></label>
      <input name="balcon" type="text" class="required" id="balcon" value="<?php //echo $row_contact['contact_last']; ?>" size="25" />    </td>
  </tr>
  <tr>
    <td height="49">&nbsp;&nbsp;<h6>&nbsp;</h6></td>
    <td>
      Add<input name="act" type="radio" class="required" id="act1c" value="add" size="25" />
		 Issue<input name="act" type="radio" class="required" id="act2c" value="issue" size="25" />
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
<tr>
<td height="86" align="right">
   <input type="submit" name="submit" id="submir" value="Insert" /></td><td align="center">&nbsp;</td><td align="left">&nbsp;</td><td >&nbsp;</td>
</tr><tr><td>&nbsp;</td>
<td height="46"> <font color="#000033"><img  align="right" src="images/lft.png" width="76" height="27" /></td><td><strong><a href="inventory.php">Go to Inventory</a></strong></td></tr>
</table>
  </form>
<div id="feedback">
		</div>
   	  
   	  <div id="templatemo_content">
       <div class="cleaner">
</div>
        
</div>
 
      
    	<div class="cleaner">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2011 Group-04 Level-3g Department of Computer Science University of Jaffna, Sri Lanka.</div>
 
<!-- end of templatemo_footer wrapper -->

</body>
</html>

