<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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

<?php
         if(isset ($_GET['err'])){
                echo $_GET['err'];
            }
   
        ?>
		
<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div > 
       <img src="images/Untitled-4 copy.jpg" width="1022" height="193"/>
         <table width="957"><tr>
          <td width="682" height="43"> <table width="351" height="41">
            <tr><td width="48"></td>
            <td width="66"><a href="index.php"><font size="+1" color="#99CCFF">Login</font></a></td>
            <td width="90"><a href="signup.php"><font size="+1" color="#99CCFF">Sign Up</font></a></td>
            <td width="127"><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></td>
          </tr></table></td></tr></table>
        <tr>
          <td height="93">
           
          <marquee direction="left">
          <p><font size="+1">Inventory Managemant System &nbsp;&nbsp;  Department of Computer Science &nbsp;&nbsp; University of Jaffna.&nbsp;&nbsp;</font></p>
          </marquee></div> <!-- end of site_title -->
        
    
  </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
    
   	  <div id="templatemo_content">
        
       	<div id="homepage_slider">
                <div id="slider">
                   
                    <a href="#"><img  src="images/slideshow/01 copy.jpg" alt="Image 2" width="578"  /></a>
                    <a href="#"><img  src="images/slideshow/01.jpg" alt="Image 1" width="577"  /></a>
                     <a href="#"><img src="images/slideshow/8.jpg" alt="Image 3" width="580"  /></a>
                    <a href="#"><img  src="images/slideshow/2.jpg" alt="Image 3" width="569"  /></a>
                   <a href="#"><img src="images/slideshow/3.jpg" alt="Image 3" width="580"  /></a>
                   <a href="#"><img src="images/slideshow/8.jpg" alt="Image 3" width="580"  /></a>
                   <a href="#"><img  src="images/slideshow/4.jpg" alt="Image 4" width="580"  /></a>
                   <a href="#"><img src="images/slideshow/5.jpg" alt="Image 5" width="580"  /></a>
                   <a href="#"><img  src="images/slideshow/6.jpg" alt="Image 6" width="580"  /></a>
                   <a href="#"><img src="images/slideshow/9.jpg" alt="Image 3" width="580"  /></a>
                   <a href="#"><img src="images/slideshow/7.jpg" alt="Image 7" width="580"  /></a>
                </div>
			</div>
                	
       	<div class="post_box">
        	  <div class="post_box_right"></div>
                <div class="cleaner"><p><strong><font size="+2" >About IMS...</font></strong> </p>
                  <p>Inventory is basically the total amount of goods and materials held in stock by a factory, store and other business. An inventory system is a process whereby a business keeps track of the goods and material it has available. Today’s competitive environment is forcing companies to optimize the procurement processes and inventory levels while at the same time ensure accuracy of controls and implementation of standard procedures for the flow of materials. However, in the absence of appropriate systems and information infrastructure, companies are finding it difficult to achieve smooth and efficient.</p>
                  </font></p>
</div>
        </div>
   	  </div>
        
      <div id="templatemo_sidebar">
   	    <div class="sidebar_box">
				<a href="http://www.flashmo.com" target="_parent"></a><center><h2>&nbsp;</h2>
				  <h2>Login</h2>
				  <p>&nbsp;</p>
				</center><form action="validatelogin.php" method="post"><table width="250" height="174"><tr><td width="88">&nbsp;&nbsp;&nbsp;Username</td><td width="172"><input type="text" name="username" id="username" /></td></tr>  <tr><td>&nbsp;&nbsp;&nbsp;Password</td><td><input type="password" name="password" id="password" /></td></tr> <tr><td height="70">&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Login" id="Login" value="Login"/></td></tr></table><center>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php">Create New Account</a>
				</center>
				  </form>    
        	
<div class="sidebar_box">
       	<h4>&nbsp;</h4>
       	<h4>&nbsp;</h4>
       	<h4>Our pages</h4>
                <ul class="tmo_list">
                  
                   <li><a href="https://code.google.com/p/inventory-management-system-ims/" target="_blank"><img src="images/googlecode.jpg" />https://code.google.com/p/inventory-management-system-ims/</a></li>
                  <li><a href="https://github.com/kesavany/Inventory-Management-System" target="_blank"><img src="images/github.jpg" />https://github.com/kesavany/Inventory-Management-System</a></li>  
                    
        </ul>
          </div>
   	  <li><a href="index.php">Our e-mail : inventorymsystem@gmail.com</a></li></div>
    
   
        <!-- end of main -->
</div> <!-- end of main wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
        
    	<div class="footer_col_w300">
          <h4>Our pages</h4>
                <ul class="tmo_list">
                    <li><a href="http://www.inventorymanagementsystemims.blogspot.com/" target="_blank"><img src="images/blogimages.jpg" />http://www.inventorymanagementsystemims.blogspot.com/</a></li>
                    <li><a href="https://plus.google.com/116146369243540557017/posts" target="_blank"><img src="images/gplusimages.png" />https://plus.google.com/116146369243540557017/posts</a></li>
                    
        </ul>
    	</div>
    	<div class="footer_col_w300">
          
   	  </div>
    	<div class="footer_col_w300 ">
    	  
    	</div>
    	<div class="cleaner">
    	  <p>&nbsp;</p>
    	  <p><center>Copyright © 2011 Group-04 Level-3G Department of Computer Science University of Jaffna, Sri Lanka.</center></p>
   	  </div>
    </div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->

</body>
</html>