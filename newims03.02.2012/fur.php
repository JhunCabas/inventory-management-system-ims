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
<title>Blue Marble Theme  - Free CSS Template</title>
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
            <td width="164"><a href="change.php"><font size="+1" color="#99CCFF">Change Password</font></a></td>
            <td width="101"><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></td>
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

 <table width="747" background="templatemo_content.jpg">
    <tr><td width="739" height="54">

<h2><center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font face="Times New Roman, Times, serif">Furniture</font></p>
</center></h2></td></tr><tr>
  <td><form action="fuinsert.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
<table width="740" height="405"border="0"  align="center" ><font color="#99CCFF">
<tr>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td width="175">&nbsp;&nbsp;<h6><img src="images/templatemo_list.png"/>&nbsp;&nbsp;<font color="#99CCFF">Articles</font></h6> </td>
<td width="175">
  <label for="no"></label>
  <select id="articlesfu" name="articles" onChange="showState(this.value)">

<?php foreach ($articles as $key => $value) { ?>
                          <option value="<?php echo $key; ?>" <?php //selected($key,$row_contact['contact_country']); ?>><?php echo $value; ?></option>
<?php } ?>

       
                        </select>
</td>
<td width="190">&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Identification No</font></h6></td>
<td width="182">
  <label for="articles"></label>
  <input name="id_no" type="text" class="required" id="id_nofu" value="<?php //echo $row_contact['contact_last']; ?>" size="25" />
</td>
</tr>
<tr>
  <td>&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Date</font></h6></td>
<td><input name="date" type="text" class="required" id="datefu" value="<?php //echo $row_contact['contact_last']; ?>" size="25" /></td>
<td>&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Folio No</font></h6>
</td>
<td>
  <label for="folio"></label>
  <input name="f_no" type="text" class="required" id="f_nofu" value="<?php //echo $row_contact['contact_first']; ?>" size="25" />
</td>
</tr>
<tr><td>&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">No of Articles</font></h6></td>
<td>
  <label for="arti"></label>
  <input name="noa" type="number"  min="1" max="999" class="required" id="noa" value="<?php //echo $row_contact['contact_last']; ?>" size="25" />
</td>
<td>&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Name of Suppliers</font></h6></td>
<td>
  <label for="suppliers"></label>
  <input name="nos" type="text" class="required" id="nos" value="<?php //echo $row_contact['contact_first']; ?>" size="25" />
</td>
</tr>
<tr><td>&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Unit Price</font></h6></td>
<td>
  <label for="price"></label>
  <input name="up" type="text" class="required" id="up" value="<?php //echo $row_contact['contact_last']; ?>" size="25" />
</td><td>&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Officer in Charge</font></h6></td><td>
  <label for="charge"></label>
  <input name="off" type="text" class="required" id="off" value="<?php //echo $row_contact['contact_first']; ?>" size="25" />
</td>
</tr>
<tr><td height="27">&nbsp;&nbsp;<h6><img src="images/templatemo_list.png" />&nbsp;&nbsp;<font color="#99CCFF">Remarks</font></h6></td><td>
  <label for="total"></label>
  <textarea name="rem" id="rem"></textarea>
</td><td>&nbsp;&nbsp;<h6>&nbsp;</h6></td><td>
  <label for="remarks"></label></td>
</tr>
<tr>
<td height="106" align="right"><input type="submit" name="submit" id="submir" value="Insert" /></td>
<td align="center">&nbsp;</td>
<td align="left">&nbsp;</td>
<td >&nbsp;</td>
</tr><tr><td>&nbsp;</td>
<td height="46"> <font color="#000033"><img  align="right" src="images/lft.png" width="76" height="27" /></td><td><strong><a href="inventory.php">Go to Inventory</a></strong></td></tr></font>
</table></form>
<div id="feedback">
		</div>
   	  
   	  <div id="templatemo_content">
       <div class="cleaner">
</div>
        
</div>
 
      
    	<div class="cleaner">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2011 Group-04 Level-3g Department of Computer Science University of Jaffna, Sri Lanka.</div>
  </div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->

</body>
</html>

