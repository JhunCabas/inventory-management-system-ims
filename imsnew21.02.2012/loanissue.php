<?php
session_start();
include('includes/functions.php');
require_once 'databaseconnection.php';
if(!user_loggedin())
{
header('Location:index.php');
}

if(isset ($_GET['err']))
	{
        echo $_GET['err'];
    }

$loan_status[0] = 'Issued';
$loan_status[1] = 'Returned';
$update = isset($_GET['id'])? 1:0;
$add = isset($_GET['add'])? 1:0;

if (!$update && !$add)
{
	$loan = mysql_query("SELECT * FROM loanissue");
}

if ($update) 
{
	if (!admin_loggedin()) {
		header("Location: loantaken.php?err=<h2>Administrator only do this operation.</h2>"); die;
	}
	$loanup = mysql_query("SELECT * FROM loanissue WHERE loan_id = ".$_GET['id']."");
	while ($loanis = mysql_fetch_assoc($loanup))
	{
		$art= $loanis['article'];
		$id= $loanis['id'];
		$isde= $loanis['issued_date'];
		$isde= $loanis['issued_by'];
		$reda= $loanis['received_by'];
		$reby=$loanis['received_dept'];
		$status=$loanis['status'];
		$retda=$loanis['return_date'];
		$rema=$loanis['remarks'];
	}
}
if ($add && $_POST['idn']) 
{
	if (!admin_loggedin()) {
		header("Location: loantaken.php?err=<h2>Administrator only do this operation.</h2>"); die;
	}
	
	mysql_query("INSERT INTO loanissue(article,id,issued_date,issued_by,received_by,received_dept,status,return_date,remarks) VALUES
	(
		'".trim($_POST['ar'])."',
		'".trim($_POST['idn'])."',
		'".trim($_POST['isda'])."',
		'".trim($_POST['isby'])."',
		'".trim($_POST['reby'])."',
		'".trim($_POST['rede'])."',
		'".trim($_POST['sta'])."',
		'".trim($_POST['retda'])."',
		'".$_POST['rema']."'
	)
	");
	set_msg('Loan issue Added');
	header('Location: loanissue.php'); die;
}

if ($_POST['idn'] && $update)
{
	if (!admin_loggedin()) {
		header("Location: loantaken.php?err=<h2>Administrator only do this operation.</h2>"); die;
	}
	mysql_query("UPDATE loanissue SET 
		article ='".trim($_POST['ar'])."',
		id='".trim($_POST['idn'])."',
		issued_date='".trim($_POST['isda'])."',
		issued_by='".trim($_POST['isby'])."',
		received_by='".trim($_POST['reby'])."',
		received_dept ='".trim($_POST['rede'])."',
		status = '".trim($_POST['sta'])."',
		return_date = '".trim($_POST['retda'])."',
		remarks = '".trim($_POST['rema'])."'
		WHERE loan_id = ".$_GET['id']."
	");
	
	set_msg('Loan issue Updated');
	header('Location: loanissue.php'); die;
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Loan Issue</title>
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
	
	


<?php //include('includes/header.php'); ?>
<div class="container">
  <div class="leftcolumn">
  <br />
  <br />
  <br />
    <h2>Loan Issue</h2>
    <?php display_msg(); ?>
 <a href="loanissue.php?add"><br />
    <strong>Add loan</strong> </a><br />
    <br />

<?php if (!$add && !$update) { ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td scope="row"><strong>Article</strong></td>
        <td><strong>Identification No</strong></td>
		<td><strong>Department</strong></td>
		<td><strong>Status</strong></td>
		<td><strong>Return Date</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

<?php $row_count = 1; while ($row_loan = mysql_fetch_assoc($loan)) { ?>
      <tr <?php if ($row_count%2) { ?>bgcolor="#red"<?php } ?>>
        <td scope="row"><?php echo $row_loan['article']; ?></td>
        <td><?php echo $row_loan['id']; ?></td>
		<td><?php echo $row_loan['received_dept']; ?></td>
		<td><?php echo $loan_status[$row_loan['status']]; ?></td>
		<td><?php echo $row_loan['return_date']; ?></td>
        <td>&nbsp;</td>
        <td><?php if (admin_loggedin()) { ?> <a href="loanissue.php?id=<?php echo $row_loan['loan_id']; ?>">Edit</a><?php }?>
      </tr>
<?php $row_count++; } ; ?>

    </table>
    <br />
	
<?php } ?>
<?php if ($update || $add) { ?>
    <form id="form1" name="form1" method="post" action="">
		<p>Article
        <br />
        <input name="ar" type="text" id="ar" value="<?php echo $art; ?>"  size="35" />
      </p>
	  <p>Identification No
        <br />
        <input name="idn" type="text" id="idn" value="<?php echo $id; ?>"  size="35" />
      </p>
	  <p>Issued Date
        <br />
        <input name="isda" type="text" id="isde" value="<?php echo $isde ; ?>"  size="35" />
      </p>
	  <p>Issued by
        <br />
        <input name="isby" type="text" id="isde" value="<?php echo $isde ; ?>"  size="35" />
      </p>
	  
	  <p>Received Dept
        <br />
        <input name="rede" type="text" id="rede" value="<?php echo $reda ; ?>"  size="35" />
      </p>
	  <p>Received by
        <br />
        <input name="reby" type="text" id="reby" value="<?php echo $reda ; ?>"  size="35" />
      </p>
      
        Status<br />

            <input name="sta" type="radio" id="sta" value="0" checked="checked" <?php checked($status,0); ?>/>
            Issued<br />
            <br />
            <input type="radio" name="sta" id="sta" value="1" <?php checked($status,1); ?>/>
            Returned<br />
            
          <br />
      </p>
	  <p><br />
	  Return date <br />
        <input name="retda" type="text" id="retda" value="<?php echo $retda ; ?>"  />
          <br />
          <br />
		  </p>
      <p>
	  Remarks <br />
        <textarea name="rema" id="rema" value="" ><?php echo $rema ; ?></textarea>
          <br />
          <br />
		  </p>
      <p>
        <input name="Submit2" type="submit" id="Submit2" value="Submit" /> 
      </p>
    </form>

<script type="text/javascript">
	var valid2 = new Validation('form1', {useTitles:true});
</script>

<?php } ?>

<table width="951" height="50">
  <tr><td width="231" height="44"></td>
<td width="226"><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td width="120"> <strong>&nbsp;&nbsp;&nbsp;<a href="main.php">Go Back</a></strong></td>
  <td width="354"></td>
</tr></table>
<div id="templatemo_content">
        
        
                	
       	
        	  
                <div class="cleaner">
</div>
        
</div>
 
      
   	<div class="cleaner">
<p><center>Copyright © 2011 Group-04 Level-3G Department of Computer Science University of Jaffna, Sri Lanka.</center></p>
    </div>
  </div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->

</body>

</html>