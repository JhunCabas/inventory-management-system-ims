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
    
   	  <p>&nbsp;</p>
   	  <p>&nbsp;</p>
	  <p><center>
   	    <h2><font  size="+3" face="Times New Roman, Times, serif">Inventory </font> Search</h2>
   	    <p>&nbsp;</p>
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
    $qry = "SELECT `articles`, `idno`, `fno`, `date`, `supna`,  `up`,  `ofinch`,  `remarks` FROM `oe` WHERE `idno` = '".$_POST['selLoan']."'";
    $res = mysql_fetch_array(mysql_query($qry));
    }
    $rows = mysql_query("SELECT `idno` FROM `oe`");
    
    ?>
	<table width="555" align="center"><tr><td width="173">
    <form method="post">
    <p>&nbsp;</p>
    Identification Number:</td><td width="191">
    <select name="selLoan" onChange="javascript:this.form.submit();">
     <option value="">            </option>
    <?php while($row = mysql_fetch_array($rows)){ ?>
    <option value="<?php echo $row['idno']; ?>" <?php if($_POST['selLoan'] == $row['idno']) {?> selected="selected" <?php } ?>><?php echo $row['idno']; ?></option>
    <?php } ?>
    </select></td>
    <td width="0"></form><td width="0"></td><td width="167" align="right"><a href="view.php"> View All</a></td></tr></table>
	



	
	
	
    <p>&nbsp;</p> 
    <?php if(@mysql_num_rows(mysql_query($qry))){ ?>
    <table width="727" height="120" border="1" align="center">
    <tr>
    <th width="69">Articles  </th> <th width="162">Identification No  </th><th width="51">Folio No  </th><th width="54">Date  </th><th width="120">Name_of_suppliers  </th><th width="66">Unit Price  </th><th width="97">Officer in Charge  </th><th width="56">Remarks  </th>
    </tr>
	<td><?php echo $res['articles']; ?></td><td><?php echo $res['idno']; ?></td><td><?php echo $res['fno']; ?></td><td><?php echo $res['date']; ?></td><td><?php echo $res['supna']; ?></td><td><?php echo $res['up']; ?></td><td><?php echo $res['ofinch']; ?></td><td width="56"><?php echo $res['remarks']; ?></td>
    
    </table>

<?php } ?>
      <p>&nbsp; </p>
	<p>&nbsp; </p>
	<p>&nbsp; </p>
	<center>
	</center>
   	    <p>&nbsp;</p>
<table width="951" height="126"><tr><td width="231" height="120"></td><td width="226"><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td width="69"> <strong>&nbsp;&nbsp;&nbsp;<a href="main.php">Go Back</a></strong></td><td width="405"></td></tr></table>
   	    <p>&nbsp;</p>
   	    <p>&nbsp;</p>
      </center>
   	  <table width="963" height="287" background="templatemo_content.jpg"><tr>
      <p>&nbsp;</p>
      <tr>
        <td width="578" height="281">
          
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

