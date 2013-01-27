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
<title>Sign Up</title>
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
          <td width="682"><table width="619" height="41">
            <tr><td width="45"></td><td width="78"><a  href="index.php"><font size="+1" color="#99CCFF">Login</font></a></td>
 <td width="90"><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></td><td width="378"></tr>
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
    
   	  <p><center>
   	    <h1><font  size="+3" face="Times New Roman, Times, serif">Sign Up</font> </h1>
      </center>
   	  <table width="963" height="287" background="templatemo_content.jpg">
   	  <tr>
<tr>
        <td width="578" height="281">
		<form  method="post" action="create.php">
          <table width="951" height="304">
		  
            <tr><td width="260"></td><td width="161"><h4><font color="#99CCFF"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;First Name</font></h4></td><td width="17"></td><td><input name="firstname" type="text" /></td></tr><tr><td></td><td width="161"><h4><font color="#99CCFF"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;Last Name</font></h4></td><td></td><td><input name="lastname" type="text" /></td></tr><tr><td></td><td width="161"><h4><font color="#99CCFF"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;e-mail</font></h4></td><td></td><td width="489"><input name="email" type="text" /></td>
              </tr><tr><td></td><td width="161"><h4><font color="#99CCFF"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;UserName</font></h4></td><td></td><td><input name="username" type="text" /></td>
                </tr><tr><td></td><td width="161"><h4><font color="#99CCFF"><img src="images/templatemo_list.png" />&nbsp;&nbsp;&nbsp;Password</font></h4></td><td></td><td><input name="password" type="password" /></td>
				
                  </tr><tr><td></td><td></td><td>&nbsp;</td><td></td><td width="0"></td>
				
                  </tr></table><table width="945"><tr><td width="86" height="73"></td><td width="194"></td><td width="412" ><?php
          require_once('recaptchalib.php');
          $publickey = "6LcC5swSAAAAAH5VgS8BDPOeAiecjPvsRx7z3B37"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?></td><td width="233"></td></tr><tr><td height="73"></td><td></td><td >
                    <input type="submit" name="Create" id="Create" value="Create" />
          </td><td></td></tr></table></form>
			<table width="951" height="50"><tr><td width="231" height="44"></td><td width="226"><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td width="96"> <strong>&nbsp;&nbsp;&nbsp;<a href="main.php">Go Back</a></strong></td>
  <td width="378"></td>
			</tr></table>
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
