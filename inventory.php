<?php
session_start();
require_once 'databaseconnection.php';


	
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
           <p>&nbsp;</p>
           <p><font size="+1">Inventory Managemant System &nbsp;&nbsp;  Department of Computer Science &nbsp;&nbsp; University of Jaffna.&nbsp;&nbsp; 	
           </font></p>
          </marquee></font></h1>
      </div> <!-- end of site_title -->
        
       
        
       
    
  </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
    
   	  <p><center><h2>&nbsp;</h2>
   	    <h2>&nbsp; </h2>
   	    <h2><font  size="+3" face="Times New Roman, Times, serif">Inventory</font> </h2>
   	    <p>&nbsp;</p>
      </center>
   	  <table width="963" height="287" background="templatemo_content.jpg"><tr>
  <td width="578" height="281">
<table width="951" height="297">
  <tr><td width="231"></td><td width="226"><h3><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="lab.php">Lab Equipment</a></h3></td><td width="69"></td><td width="405"><h3><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="consum.php">Consumable</a></font></h3></td></tr><tr><td></td><td><h3><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="office.php">Office Equipment</a></font></h3></td><td></td><td width="405"><h3><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="mainten.php">Maintenance</a></font></h3></td></tr><tr><td></td><td><h3><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="fur.php">Furniture</a></font></h3></td><td></td><td width="405"><h3><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="stat.php">Stationary</a></font></h3></td></tr><tr><td height="120"></td><td><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td> <strong>&nbsp;&nbsp;&nbsp;<a href="main.php">Go Back</a></strong></td><td></td></tr></table></td>
      </tr></table>
   	  <div id="templatemo_content">
        
        
                	
       	
        	  
                <div class="cleaner">
</div>
        
</div>
 
      
    	<div class="cleaner">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2011 Group-04 Level-3g Department of Computer Science University of Jaffna, Sri Lanka.</div>
  </div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->

</body>
</html>
