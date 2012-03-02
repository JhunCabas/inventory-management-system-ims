<?php
session_start();
require_once 'databaseconnection.php';
include('includes/functions.php');
if(!user_loggedin())
{
header('Location:index.php');
}
if(isset ($_GET['err']))
	{
        echo $_GET['err'];
    }
	
$show = isset($_GET['id'])? 1:0;
$add = isset($_GET['add'])? 1:0;
if (!$show && !$add)
{
	$rem = mysql_query("SELECT * FROM remove");
}
if ($show) 
{
	$remshow = mysql_query("SELECT * FROM remove ");
	while ($remsh = mysql_fetch_assoc($remshow))
	{
		if($remsh['idno']==$_GET['id'])
		{
			$id= $remsh['idno'];
			$art= $remsh['article'];
			$rea= $remsh['reason'];
			$dat= $remsh['date'];
			$auby=$remsh['authorized_by'];
		}
		
	}
}
if ($add && $_POST['idn']) 
{
	if (!admin_loggedin()) {
		header("Location: loantaken.php?err=<h3>Administrator only do this operation.</h3>"); die;
	}
	mysql_query("INSERT INTO remove (idno,article,reason,date,authorized_by) VALUES
	(
		'".trim($_POST['idn'])."',
		'".trim($_POST['ar'])."',
		'".trim($_POST['rea'])."',
		'".trim($_POST['dat'])."',
		'".trim($_POST['auby'])."'
	)
	");
	mysql_query("UPDATE currentstatus SET 
		status ='removed',
		location='null'
		WHERE idno = ".trim($_POST['idn'])."
	");
	
	set_msg('Item removed');
	header('Location: remove.php?err=<h1>Item removed </h1>'); die;
}
if ($show && $_POST['idn']) 
{
	header('Location: remove.php'); die;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Remove Inventory</title>
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
          <td width="974" height="53"><table width="957"><tr>
          <td width="682"><table width="943" height="41">
            <tr><td width="45"></td><td width="66"><a  href="main.php"><font size="+1" color="#99CCFF">Home</font></a></td>
            <td width="162"><a href="change.php"><font size="+1" color="#99CCFF">Change Password</font></a></td>
            <td width="97"><a href="about.php"><font size="+1" color="#99CCFF">About Us</font></a></td>
            <td width="217"><a href="logout.php"><font size="+1" color="#99CCFF">Sign Out</font></a></td><td width="328"><form action="#" method="post">
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
	  <p>&nbsp;</p>
	  <center>
<h1><font  size="+3" face="Times New Roman, Times, serif">Remove Inventory</font></h1></center>
        
<div class="container">
  <div class="leftcolumn">
    <?php display_msg(); ?>
 <a href="remove.php?add"><br />
    <h3><strong>Remove Inventory</strong> </a></h3><br />
    

<?php if (!$add && !$show) { ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="27%" scope="row"><strong>Identification Number</strong></td>
        <td width="19%"><strong>Article</strong></td>
		<td width="16%"><strong>Reason</strong></td>
		<td width="14%"><strong>date</strong></td>
		<td width="16%"><strong>Authorized By</strong></td>
        <td width="1%">&nbsp;</td>
        <td width="7%">&nbsp;</td>
      </tr>

<?php $row_count = 1; while ($row_rem = mysql_fetch_assoc($rem)) { ?>
      <tr <?php if ($row_count%2) { ?>bgcolor="#red"<?php } ?>>
        <td scope="row"><?php echo $row_rem['idno']; ?></td>
        <td><?php echo $row_rem['article']; ?></td>
		<td><?php echo $row_rem['reason']; ?></td>
		<td><?php echo $row_rem['date']; ?></td>
		<td><?php echo $row_rem['authorized_by']; ?></td>
        <td>&nbsp;</td>
        <td><a href="remove.php?id=<?php echo $row_rem['idno']; ?>">Show</a>
      </tr>
<?php $row_count++; } ; ?>

    </table>
    <br />
	
<?php } ?>
<?php if ($show || $add) { ?>



    <form id="form1" name="form1" method="post" action=""><center>
    <table width="537" height="252">
  <tr><td width="223" height="41">Identification Number</td><td width="302"><input name="idn"  type="text" id="idn" value="<?php echo $id; ?>"  size="35" /></td></tr><tr><td height="35">Article</td><td width="302"><input name="ar" type="text" id="ar" value="<?php echo $art; ?>"  size="35" /></td></tr><tr><td>Reason</td><td width="302"><p id="rea" name="rea" value="">
    <textarea name="rea" cols="28" id="rea" value="" ><?php echo $rea ; ?></textarea>
  </p></td>
  </tr><tr><td height="35">Date</td><td><input name="dat" type="text" id="dat" value="<?php echo $dat ; ?>"  size="35" /></td></tr><tr><td height="37">Authorized By</td><td><input name="auby" type="text" id="auby" value="<?php echo $auby; ?>" size="35" /></td></tr><tr><td height="41"></td><td><input name="Submit2" type="submit" class="last_content_box" id="Submit2" value="Submit" /></td></tr></table></form>
    </table></center>

<script type="text/javascript">
	var valid2 = new Validation('form1', {useTitles:true});
</script>

<?php } ?>
<center>
      <p>&nbsp;</p>
	  <table width="951" height="47"><tr><td width="231" height="41"></td><td width="228"><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td width="133"> <strong>&nbsp;&nbsp;&nbsp;<a href="main.php">Go Back</a></strong></td><td width="339"></td></tr></table>
</center>
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