<?php
session_start();
?>
<?php
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

$user_status[1] = 'Admin';
$user_status[2] = 'Read Only';
$update = isset($_GET['id'])? 1:0;
$add = isset($_GET['add'])? 1:0;

if (!$update && !$add)
{
	$users = mysql_query("SELECT * FROM users");
}

if ($update) 
{
	if (!admin_loggedin()) {
header("Location: usermanage.php?err=<h2>Administrator only do this operation.</h2>"); die;
}
	$usersup = mysql_query("SELECT * FROM users WHERE user_id = ".$_GET['id']."");
	while ($usersu = mysql_fetch_assoc($usersup))
	{
		$userf= $usersu['firstname'];
		$userl= $usersu['lastname'];
		$useru= $usersu['username'];
		$usere= $usersu['email'];
		$userle=$usersu['ulevel'];
		$password=$usersu['password'];
	}
}

if ($_POST['password'])
{
	$password = md5($_POST['password']);
}

if ($add && $_POST['user_email']) 
{
	if (!admin_loggedin()) {
header("Location: usermanage.php?err=<h2>Administrator only do this operation.</h2>"); die;
}
	mysql_query("INSERT INTO users (email,firstname,lastname,username,password, ulevel) VALUES
	(
		'".trim($_POST['user_email'])."',
		'".trim($_POST['fn'])."',
		'".trim($_POST['ln'])."',
		'".trim($_POST['un'])."',
		'".$password."',
		'".$_POST['user_level']."'
	)
	");
	set_msg('User Added');
	header('Location: usermanage.php?err=<h1>User Added</h1>'); die;
}

if ($_POST['user_email'] && $update)
{
	if (!admin_loggedin()) {
header("Location: usermanage.php?err=<h2>Administrator only do this operation.</h2>"); die;
}
	mysql_query("UPDATE users SET 
		email ='".trim($_POST['user_email'])."',
		firstname='".trim($_POST['fn'])."',
		lastname='".trim($_POST['ln'])."',
		username='".trim($_POST['un'])."',
		password ='".$password."',
		ulevel = '".trim($_POST['user_level'])."'
		WHERE user_id = ".$_GET['id']."
	");
	set_msg('User Updated');
	header('Location: usermanage.php?err=<h2>User Updated</h2>'); die;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Management</title>
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
           <p>&nbsp;</p>
           <p><font size="+1">Inventory Managemant System &nbsp;&nbsp;  Department of Computer Science &nbsp;&nbsp; University of Jaffna.&nbsp;&nbsp; 	
           </font></p>
          </marquee></font></h1>
  </div> <!-- end of site_title -->
        
       
        
       
    
  </div> <!-- end of header -->


<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
    
   	  <div id="templatemo_content">
        
        
                	
       	
        	  
                <div class="cleaner"></div>
   	  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <center>
    <h2><font  size="+3" face="Times New Roman, Times, serif">User Management </font></h2></center>
    <p>
  <?php //include('includes/header.php'); ?>
  <div class="container">
      <div class="leftcolumn">
      
      <?php display_msg(); ?>
      <a href="usermanage.php?add"><br />
    <strong>Add User</strong> </a></p>
    <p><br />
      
      <?php if (!$add && !$update) { ?>
    </p>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><strong>Name</strong></td>
		<td scope="row"><strong>Email</strong></td>
        <td><strong>Level</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

<?php $row_count = 1; while ($row_users = mysql_fetch_assoc($users)) { ?>
      <tr <?php if ($row_count%2) { ?>bgcolor="#red"<?php } ?>>
	  <td><?php echo $row_users['firstname'] ." ". $row_users['lastname']  ; ?></td>
        <td scope="row"><?php echo $row_users['email']; ?></td>
        <td><?php echo $user_status[$row_users['ulevel']]; ?></td>
        <td>&nbsp;</td>
		<td><?php if (admin_loggedin()) { ?> <a href="usermanage.php?id=<?php echo $row_users['user_id']; ?>">Edit</a>| <a onClick="javascript:return confirm('Are you sure?')" href="delete.php?user=<?php echo $row_users['user_id']; ?>">Delete</a><?php }else{}  ?></td>
      </tr>
<?php $row_count++; } ; ?>

    </table>
    <br />
	
<?php } ?>
<?php if ($update || $add) { ?>
    <form id="form1" name="form1" method="post" action="">
		<p>First Name
        <br />
        <input name="fn" type="text" id="fn" value="<?php echo $userf; ?>"  size="35" />
      </p>
	  <p>Last Name
        <br />
        <input name="ln" type="text" id="ln" value="<?php echo $userl; ?>"  size="35" />
      </p>
	  <p>Email
        <br />
        <input name="user_email" type="text" id="user_email" value="<?php echo $usere ; ?>" class="required validate-email" size="35" />
      </p>
      <p>Username
        <br />
        <input name="un" type="text" id="un" value="<?php echo $useru; ?>" size="35" />
      </p>
      <p><br />
        Password (leave blank to keep current password) <br />
        <input name="password" type="password" id="password" />
          <br />
          <br />
          Level<br />

            <input name="user_level" type="radio" id="user_level" value="1" checked="checked" <?php checked($userle,1); ?>/>
            Admin<br />
            <br />
            <input type="radio" name="user_level" id="user_level" value="2" <?php checked($userle,2); ?>/>
            Regular User<br />
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

<?php } ?><center>
  <table width="951" height="55"><tr><td width="231" height="49"></td><td width="177"><img src="images/lft.gif" width="94" height="23" align="right"  /></td>
  <td width="163"> <strong>&nbsp;&nbsp;&nbsp;<a href="main.php">Go Back</a></strong></td><td width="360"></td></tr></table>
</center>
  <table width="963" height="287" background="templatemo_content.jpg">
      
    	<div class="cleaner">
<p><center>Copyright © 2011 Group-04 Level-3G Department of Computer Science University of Jaffna, Sri Lanka.</center></p>
</div>
    </div> <!-- end of templatemo_footer -->
</div> 
<!-- end of templatemo_footer wrapper -->
</body>
</html>