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
<title>Home</title>
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
       
        <img src="images/Untitled-4 copy.jpg" width="1023" height="193"/> <table width="982">
          <tr>
          <td width="974" height="54"><table width="957"><tr>
          <td width="682" height="46"><table width="943" height="44">
            <tr><td width="45" height="38"></td><td width="66"><p><a  href="main.php"><font size="+1" color="#99CCFF">Home</font></a></p></td>
            <td width="162"><p><a href="change.php"><font size="+1" color="#99CCFF">Change Password</font></a></p></td>
            <td width="97"><p><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></p></td>
            <td width="217"><p><a href="logout.php"><font size="+1" color="#99CCFF">Sign Out</font></a></p></td><td width="328"><form action="#" method="post">
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


<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
    
   	  <div id="templatemo_content">
        
        
                	
       	
        	  
                <div class="cleaner"><table width="963" height="505" background="templatemo_content.jpg"><tr>
                  <td width="370" height="499">
<table width="363" height="254">
  <tr>
    <td width="355" height="48"><h2><font color="#000066"><img src="images/templatemo_list.png" /></font><font color="#000066">&nbsp;&nbsp;&nbsp;<a href="inventory.php">Add Inventory</a></font></h2>
      <p>&nbsp;</p></td></tr><tr>
        <td height="48"><h2><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="invsearch.php">Inventory Search</a></font></h2>
          <p>&nbsp;</p></td></tr><tr>
          <td height="48"><h2><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="loan.php">Loan</a></font></h2>
            <p>&nbsp;</p></td></tr><tr>
          <td height="48"><h2><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="usermanage.php">User Management</a></font></h2>
            <p>&nbsp;</p></td></tr><tr>
              <td height="48"><h2><font color="#000066"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;<a href="remove.php">Remove Inventory</a></font></h2></td></tr></table></td><td width="581"><p><img src="images/slideshow/inventory management2.jpg" /></p></td>
                </tr></table>
</div>
        
</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
      
    	<div class="cleaner">
        <p>&nbsp;</p>
        <p><center>Copyright © 2011 Group-04 Level-3G Department of Computer Science University of Jaffna, Sri Lanka.</center></p>
    	</div>
    </div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->



</body>
</html>