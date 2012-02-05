<?php
session_start();
include('includes/functions.php');
require_once 'databaseconnection.php';
if(!user_loggedin())
{
header('Location:index.php');
}
//$dbh_handler=mysql_connect('localhost','root','');
//mysql_select_db("ims",$dbh_handler);

if(isset ($_GET['err']))
	{
        echo $_GET['err'];
    }

$loan_status[0] = 'Received';
$loan_status[1] = 'Returned';
$update = isset($_GET['id'])? 1:0;
$add = isset($_GET['add'])? 1:0;

if (!$update && !$add)
{
	$loan = mysql_query("SELECT * FROM loantaken");
}

if ($update) 
{
	$loanup = mysql_query("SELECT * FROM loantaken WHERE loan_id = ".$_GET['id']."");
	while ($loanis = mysql_fetch_assoc($loanup))
	{
		$art= $loanis['article'];
		$id= $loanis['id'];
		$isde= $loanis['issued_dept'];
		$reda= $loanis['received_date'];
		$reby=$loanis['received_by'];
		$status=$loanis['status'];
		$retda=$loanis['return_date'];
		$rema=$loanis['remarks'];
	}
}
if ($add && $_POST['idn']) 
{
	mysql_query("INSERT INTO loantaken (article,id,issued_dept,received_date,received_by,status,return_date,remarks) VALUES
	(
		'".trim($_POST['ar'])."',
		'".trim($_POST['idn'])."',
		'".trim($_POST['isde'])."',
		'".trim($_POST['reda'])."',
		'".trim($_POST['reby'])."',
		'".trim($_POST['sta'])."',
		'".trim($_POST['retda'])."',
		'".$_POST['rema']."'
	)
	");
	set_msg('Loan taken Added');
	header('Location: loantaken.php?err=<h2>records added </h2>'); die;
}

if ($_POST['idn'] && $update)
{
	mysql_query("UPDATE loantaken SET 
		article ='".trim($_POST['ar'])."',
		id='".trim($_POST['idn'])."',
		issued_dept='".trim($_POST['isde'])."',
		received_date='".trim($_POST['reda'])."',
		received_by ='".trim($_POST['reby'])."',
		status = '".trim($_POST['sta'])."',
		return_date = '".trim($_POST['retda'])."',
		remarks = '".trim($_POST['rema'])."'
		WHERE loan_id = ".$_GET['id']."
	");
	//echo trim($_POST['ar']);
	set_msg('Loan taken Updated');
	header('Location: loantaken.php?err=<h2>records added </h2>'); die;
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loan Taken</title>
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
    




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Loan Taken</title>
<script src="includes/lib/prototype.js" type="text/javascript"></script>
<script src="includes/src/effects.js" type="text/javascript"></script>
<script src="includes/validation.js" type="text/javascript"></script>
</head>
<body>
<?php //include('includes/header.php'); ?>
<div class="container">
  <div class="leftcolumn">
  <br />
  <br />
  <br />
    <h2>Loan Taken</h2>
    <?php display_msg(); ?>
 <a href="loantaken.php?add"><br />
    <strong>Add loan</strong> </a><br />
    <br />

<?php if (!$add && !$update) { ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td scope="row"><strong>article</strong></td>
        <td><strong>id no</strong></td>
		<td><strong>dept</strong></td>
		<td><strong>status</strong></td>
		<td><strong>return date</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

<?php $row_count = 1; while ($row_loan = mysql_fetch_assoc($loan)) { ?>
      <tr <?php if ($row_count%2) { ?>bgcolor="#red"<?php } ?>>
        <td scope="row"><?php echo $row_loan['article']; ?></td>
        <td><?php echo $row_loan['id']; ?></td>
		<td><?php echo $row_loan['issued_dept']; ?></td>
		<td><?php echo $loan_status[$row_loan['status']]; ?></td>
		<td><?php echo $row_loan['return_date']; ?></td>
        <td>&nbsp;</td>
        <td><a href="loantaken.php?id=<?php echo $row_loan['loan_id']; ?>">Edit</a>
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
	  <p>id
        <br />
        <input name="idn" type="text" id="idn" value="<?php echo $id; ?>"  size="35" />
      </p>
	  <p>Issued Dept
        <br />
        <input name="isde" type="text" id="isde" value="<?php echo $isde ; ?>"  size="35" />
      </p
	  ><p>Received Date
        <br />
        <input name="reda" type="text" id="reda" value="<?php echo $reda ; ?>"  size="35" />
      </p>
      <p>Received by
        <br />
        <input name="reby" type="text" id="reby" value="<?php echo $reby; ?>" size="35" />
      </p>
      <p><br />
        
          Status<br />

            <input name="sta" type="radio" id="sta" value="0" checked="checked" <?php checked($status,0); ?>/>
            Received<br />
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

<table width="951" height="126"><tr><td width="231" height="120"></td><td width="226"><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td width="69"> <strong>&nbsp;&nbsp;&nbsp;<a href="main.php">Go Back</a></strong></td><td width="405"></td></tr></table>
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
