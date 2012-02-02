<?php
/*mysql_select_db($database_contacts, $contacts);

include('includes/functions.php');

session_start();
if (!isset($_SESSION['user'])) {
header('Location: login.php');
}

//GET USER INFORMATION
record_set('userinfo',"SELECT * FROM users WHERE user_email = '".$_SESSION['user']."'");
$user_admin = $row_userinfo['user_level'] == 1 ? 1 : 0;
$userid = $row_userinfo['user_id'];
//

//GET OPTION INFORMATION
function get_option ($opt)  {
   $query =  mysql_query("SELECT option_value FROM options WHERE option_title = '".$opt."'");
   $result = mysql_fetch_array($query);
   return $result['option_value'];
}
//

$contactcount = mysql_query("SELECT * FROM contacts") or die(mysql_error());
$contactcount = mysql_num_rows($contactcount);

//not applicable
$na = '<span style="color:#CCCCCC">N/A</span>';
//

//get tags
record_set('tags',"SELECT * FROM tags INNER JOIN tags_assoc ON itag_tag = tag_id INNER JOIN contacts ON contact_id = itag_contact ORDER BY tag_description ASC");
//

//list of states
$state_list = array('AL'=>"Alabama",
                'AK'=>"Alaska", 
                'AZ'=>"Arizona", 
                'AR'=>"Arkansas", 
                'CA'=>"California", 
                'CO'=>"Colorado", 
                'CT'=>"Connecticut", 
                'DE'=>"Delaware", 
                'DC'=>"District Of Columbia", 
                'FL'=>"Florida", 
                'GA'=>"Georgia", 
                'HI'=>"Hawaii", 
                'ID'=>"Idaho", 
                'IL'=>"Illinois", 
                'IN'=>"Indiana", 
                'IA'=>"Iowa", 
                'KS'=>"Kansas", 
                'KY'=>"Kentucky", 
                'LA'=>"Louisiana", 
                'ME'=>"Maine", 
                'MD'=>"Maryland", 
                'MA'=>"Massachusetts", 
                'MI'=>"Michigan", 
                'MN'=>"Minnesota", 
                'MS'=>"Mississippi", 
                'MO'=>"Missouri", 
                'MT'=>"Montana",
                'NE'=>"Nebraska",
                'NV'=>"Nevada",
                'NH'=>"New Hampshire",
                'NJ'=>"New Jersey",
                'NM'=>"New Mexico",
                'NY'=>"New York",
                'NC'=>"North Carolina",
                'ND'=>"North Dakota",
                'OH'=>"Ohio", 
                'OK'=>"Oklahoma", 
                'OR'=>"Oregon", 
                'PA'=>"Pennsylvania", 
                'RI'=>"Rhode Island", 
                'SC'=>"South Carolina", 
                'SD'=>"South Dakota",
                'TN'=>"Tennessee", 
                'TX'=>"Texas", 
                'UT'=>"Utah", 
                'VT'=>"Vermont", 
                'VA'=>"Virginia", 
                'WA'=>"Washington", 
                'WV'=>"West Virginia", 
                'WI'=>"Wisconsin", 
                'WY'=>"Wyoming");
//
*/
$consumables = array(
"1"=>"Paper",
"2"=>"Pencil",
"3"=>"Photo Copy Paper",
"4"=>"Sello tape",
"5"=>"Chalk",
"6"=>"Note book",
"7"=>"White board marker",
"8"=>"Permanent marker",
"9"=>" Gum Bottle",
"10"=>" Scissors",
"11"=>"Stapler pin",
"12"=>"Attendence register"); 

$stationary = array(
"1"=>"Pen",
"2"=>"Pencil",
"3"=>"Photo Copy Paper",
"4"=>"Sello tape",
"5"=>"Chalk",
"6"=>"Note book",
"7"=>"White board marker",
"8"=>"Permanent marker",
"9"=>" Gum Bottle",
"10"=>" Scissors",
"11"=>"Stapler pin",
"12"=>"Attendence register"); 

$maintenance = array(
"1"=>"Bulb",
"2"=>"Pencil",
"3"=>"Photo Copy Paper",
"4"=>"Sello tape",
"5"=>"Chalk",
"6"=>"Note book",
"7"=>"White board marker",
"8"=>"Permanent marker",
"9"=>" Gum Bottle",
"10"=>" Scissors",
"11"=>"Stapler pin",
"12"=>"Attendence register"); 

$articles= array(
	'1'=>'Accounting Machine',
	'2'=>'Air Conditioner',
	'3'=>'Almyrah',
	'4'=>'Black board',
	'5'=>'Bins',
	'6'=>'Bucket',
	'7'=>'Card index cabinet',
	'8'=>'Filling cabinet',
	'9'=>'Steel cabinet',
	'10'=>'Calculaters',
	'11'=>'Chair(Arm)',
	'12'=>'Chair(Dining)',
	'13'=>'Chair(Ordinary)',
	'14'=>'Chair(Reclining)',
	'15'=>'Chair(Revolving)',
	'16'=>'Chair(Verandah)',
	'17'=>'Clock & Time recorders',
	'18'=>'Computers & Tabulaters',
	'19'=>'Cupboard(Wooden)',
	'20'=>'Desk(Examination)',
	'21'=>'Diotaphone',
	'22'=>'Electric kettle',
	'23'=>'Exhausters',
	'24'=>'Fan',
	'25'=>'Floor polisher',
	'26'=>'Geysers,Heaters',
	'27'=>'Intercom Units',
	'28'=>'Mirrors',
	'29'=>'Notice Board',
	'30'=>'Photo copying machine',
	'31'=>'Roneo machine',
	'32'=>'Radiater',
	'33'=>'Refrigirators',
	'34'=>'Radio',
	'35'=>'Steel bosses,Strong Boxes',
	'36'=>'Screens',
	'37'=>'Settees',
	'38'=>'Shelves',
	'39'=>'Stools',
	'40'=>'Lecture Hall Stand',
	'41'=>'Office Tray',
	'42'=>'Table(Conference)',
	'43'=>'Table(Dining)',
	'44'=>'Table(Dressing)',
	'45'=>'Table(Executive)',
	'46'=>'Table Office',
	'47'=>'Table(Typing)',
	'48'=>'Table(Writing)',
	'49'=>'Telephone',
	'50'=>'Telephone Switch board',
	'51'=>'Telex Tele Printers',
	'52'=>'Tools Rack',
	'53'=>'Type writter',
	'54'=>'First Aid Box',
	'55'=>'Vacum Cleaner',
	'56'=>'Wardrobes',
	'57'=>'Water Filter',
	'58'=>'Power Generators',
	'59'=>'Implements and Hard tools',
	'60'=>'Laboratory Instruments',
	'61'=>'Light bulbs',
	'62'=>'Hammers',
	'63'=>'Hand tools(Electric)',
	'64'=>'Hand tools(Other)',
	'65'=>'Hand tools(Pneumatic)',
	'66'=>'Fire Extinguishers',
	'67'=>'Projectors',
	'68'=>'Recording & Reproducing Equipment',
	'69'=>'Bicycle',
	'70'=>'Car',
	);
/*

//search array
$like_where_array = array();

$like_where_array[] = 'contact_first';
$like_where_array[] = 'contact_last';
$like_where_array[] = 'contact_title';
$like_where_array[] = 'contact_street';
$like_where_array[] = 'contact_company';
$like_where_array[] = 'contact_city';
$like_where_array[] = 'contact_zip';
$like_where_array[] = 'contact_phone';
$like_where_array[] = 'contact_profile';
$like_where_array[] = 'contact_cell';
$like_where_array[] = 'contact_web';
$like_where_array[] = 'contact_custom';
$like_where_array[] = 'contact_tags';

$i = 1;
foreach ($like_where_array as $key => $value) {

$and = '';
if ($i > 1) {
$and = 'OR';
}
$like_where .= "$and $value LIKE '%".$_GET[s]."%' ";
$i++;
}*/

?>