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
<title>Inventory Search Other Equipment Search</title>
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
           <p><font size="+1">Inventory Managemant System &nbsp;&nbsp;  Department of Computer Science &nbsp;&nbsp; University of Jaffna.&nbsp;&nbsp; 	
           </font></p>
          </marquee></font></h1>
      </div> <!-- end of site_title -->
        
       
        
       
    
  </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
    
   	  <p><center>
   	    <h2><font  size="+3" face="Times New Roman, Times, serif">Other Equipment Search</font> </h2>
      </center>
	  <p>&nbsp;</p>
	  
      <?php
		 include('includes/sc-includes.php');
		 require_once 'databaseconnection.php';
		 
		 
	if($_POST['sel']=='sta')
    {
    $art=$stationary;
    }
	else if($_POST['sel']=='mai')
    {
    $art = $maintenance ;
    }
	else 
    {
    $art = $consumables ;
    }
    
    if(isset($_POST['selLoan'])&&$_POST['sel']=='con')
    {
    $qry = "SELECT `id`,`item`,`date`,`no`,`action`,`balance` FROM `cons` WHERE `item` = '".$_POST['selLoan']."'";
     $res = mysql_query($qry);
    }
	else if(isset($_POST['selLoan'])&&$_POST['sel']=='sta')
    {
    $qry = "SELECT `id`,`item`,`date`,`no`,`action`,`balance` FROM `sta` WHERE `item` = '".$_POST['selLoan']."'";
    $res = mysql_query($qry);
    }
	
	else if(isset($_POST['selLoan'])&&$_POST['sel']=='mai')
    {
    $qry = "SELECT `id`,`item`,`date`,`no`,`action`,`balance` FROM `mai` WHERE `item` = '".$_POST['selLoan']."'";
    $res = mysql_query($qry);
    }
	
	?>
    <font  size="+2">
	<table width="555" align="center"><tr><td width="173">
    <form method="post">
    
	Category:</td><td width="191">
    <select name="sel" onChange="javascript:this.form.submit();">
     <option value="con"<?php if($_POST['sel'] =='con') {?> selected="selected" <?php }?>>Consumables</option>
    <option value="sta"<?php if($_POST['sel'] =='sta') {?>selected="selected"  <?php }?>>Stationery</option>
	 <option value="mai"<?php if($_POST['sel'] =='mai') {?> selected="selected" <?php }?> >Maintenance</option>
	 
    </select></td></tr>
	<tr><td width="300">
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>Articles:</p></td><td width="211">
        <p>&nbsp;          </p>
        <p>&nbsp;          </p>
        <p>
          <select name="selLoan" onChange="javascript:this.form.submit();">
            <option value="">            </option>
            <?php foreach ($art as $key => $value) { ?>
            <option value="<?php echo $value; ?>" <?php if($_POST['selLoan'] == $value) {?> selected="selected" <?php } ?>><?php echo $value; ?></option>
            <?php } ?>
          </select>
        </p></td>
    <td width="28">
	</form><td width="300"></td><td width="211" align="right"><a href="view.php?id=<?php echo $_POST['sel']; ?>"> View All</a></td>
	</tr></table></font>

    <p>&nbsp;</p> 
    <?php if(@mysql_num_rows(mysql_query($qry))){ ?>
    <table width="727" height="120" border="1" align="center">
    <tr>
    <th width="125">Articles  </th> 
    <th width="167">Date  </th>
    <th width="126">Quantity </th>
    <th width="133">Action  </th>
    <th width="142">Balance </th>
    </tr>
	 <?php while($results= mysql_fetch_array($res)){ ?>
	 <tr>
	<td><?php echo $results['item']; ?></td><td><?php echo $results['date']; ?></td><td><?php echo $results['no']; ?></td><td><?php echo $results['action']; ?></td><td><?php echo $results['balance']; ?></td>
     </tr>
	 <?php } ?>
    </table>

<?php } 
	else if(@mysql_num_rows(mysql_query($qry))==0 && $_POST['selLoan']!="" ) echo"Sorry, but we can not find an entry to match your query...<br><br>";
?>

      <p>&nbsp; </p>
	
	<center><table><tr><td><img  align="right" src="images/lft.png" width="76" height="27" /></td>
	<td><strong><a href="invsearch.php">Go to Inventory Search</a></strong></td>
	</tr></table></center>
          <div id="templatemo_content">
            
            
            
            
            
            <div class="cleaner">
            </div>
            
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


