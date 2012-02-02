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
<script type="text/javascript">
<!--
/* we'll only allow DOM browsers to simplify things*/
(document.getElementById ? DOMCapable = true : DOMCapable = false);
function hide(menuName)
{
if (DOMCapable)
{
var theMenu = document.getElementById(menuName+"choices");
theMenu.style.visibility = 'hidden';
}
}
function show(menuName)
{
if (DOMCapable)
{
var theMenu = document.getElementById(menuName+"choices");
theMenu.style.visibility = 'visible';
}
}
//-->
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
   	    <h2>&nbsp;</h2>
   	    <h2><font  size="+3" face="Times New Roman, Times, serif">Inventory Search</font> </h2>
      </center>
	  
	  <p>&nbsp;</p>
	  <table width="334" align="center"><tr><td width="141"> <a href="invsearch.php">Main Equipment Search</a></td><td width="123"><a href="invser.php">Other Equipment Search</a></td></tr></table>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
   	     <?php
		 require_once 'databaseconnection.php';
    //$host_name = "localhost";
    //$user_name = "root";
    //$password = "";
    //$db_name = "ims";
    //$con = mysql_connect($host_name,$user_name,$password);
    //$db_select = mysql_select_db($db_name,$con);
     
	 if(isset($_POST['selLoan']))
    {
    $qry = "SELECT `item`, `date`, `no`, `action`, `balance` FROM `cons` WHERE `item` = '".$_POST['selLoan']."'";
    $res = mysql_fetch_array(mysql_query($qry));
    }
    $rows = mysql_query("SELECT `item` FROM `cons`");
    
    ?>
	<table width="555" align="center"><tr><td width="173">
    <form method="post">
    <p>&nbsp;</p>
    Identification Number:</td><td width="191">
    <select name="selLoan" onChange="javascript:this.form.submit();">
     <option value="">            </option>
    <?php while($row = mysql_fetch_array($rows)){ ?>
    <option value="<?php echo $row['item']; ?>" <?php if($_POST['selLoan'] == $row['item']) {?> selected="selected" <?php } ?>><?php echo $row['item']; ?></option>
    <?php } ?>
    </select></td>
    <td width="0"></form><td width="0"></td><td width="167" align="right"><a href="view1.php"> View All</a></td></tr></table>
	



	
	
	
    <p>&nbsp;</p> 
    <?php if(@mysql_num_rows(mysql_query($qry))){ ?>
    <table width="727" height="120" border="1" align="center">
    <tr>
    <th width="121">Item  </th> <th width="144">Date  </th><th width="138"> Number  </th><th width="136">Action  </th><th width="154">Balance  </th>
    </tr>
	<td><?php echo $res['item']; ?></td><td><?php echo $res['date']; ?></td><td><?php echo $res['no']; ?></td><td><?php echo $res['action']; ?></td><td><?php echo $res['balance']; ?></td>
    
    </table>

<?php } ?>
      <p>&nbsp; </p>
	<p>&nbsp; </p>
	<p>&nbsp; </p>
	<center><table><tr><td><img  align="right" src="images/lft.png" width="76" height="27" /></td>
	<td><strong><a href="main.php">Go Back </a></strong></td>
	</tr></table></center>
          <div id="templatemo_content">
            
            
            
            
            
            <div class="cleaner">
            </div>
            
          </div>
          
          
          <div class="cleaner">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright � 2011 Group-04 Level-3g Department of Computer Science University of Jaffna, Sri Lanka.</div>
</div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->

</body>
</html>


