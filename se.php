<?php
  $var = @$_GET['search'] ;
  $trimmed = trim($var); 
$limit=10; 

// check for an empty string and display a message.
if ($trimmed == "")
  {
  //echo "<p>Please enter a search...</p>";
  exit;
  }

// check for a search parameter
if (!isset($var))
  {
  echo "<p>We dont seem to have a search parameter!</p>";
  exit;
  }
require_once 'databaseconnection.php';
//mysql_connect("localhost","root","");
//mysql_select_db("ims") or die("Unable to select database"); 

$query = "select * from le where articles like \"%$trimmed%\"  
  order by articles"; 

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative

if ($numrows == 0)
  {
  echo "<h4>Results</h4>";
  echo "<p>Sorry, your search: &quot;" . $trimmed . "&quot; returned zero results</p>";

// google
 echo "<p><a href=\"http://www.google.com/search?search=" 
  . $trimmed . "\" target=\"_blank\" title=\"Look up 
  " . $trimmed . " on Google\">Click here</a> to try the 
  search on google</p>";
  }

// next determine if s has been passed to script, if not use 0
  if (empty($s)) {
  $s=0;
  }

// get results
  $query .= " limit $s,$limit";
  $result = mysql_query($query) or die("Couldn't execute query");

// display what the person searched for
echo "<p>You searched for: &quot;" . $var . "&quot;</p>";

?>
