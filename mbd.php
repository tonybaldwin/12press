<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press Meetings </title>
</head>
<body>
<?php
include 'include/header.php';

include 'include/navbar.php';

ini_set('display_errors', "1");
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>

<div id="main">
<?php
date_default_timezone_set('America/New_York');
echo "TIME: ";
echo date('H:i');
echo " DATE: ";
echo date('m/d/Y');
echo "<h1>$sitetitle</h1>";
?>

<ul>
<?php
if (isset($_GET['day']))
	{
	$day = $_GET['day'];
echo "<h4>Meetings List for $day:</h4>";
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
$cquery = "SELECT * FROM meetings where day=\"$day\"";
$mtgres = mysql_query($cquery);
while($row = mysql_fetch_assoc($mtgres))
{
	$id = $row['id'];
	$meetingname = $row['meetingname'];
	$day = $row['day'];
	$time = $row['time'];
	$street = $row['Street'];
	$city = $row['city'];
	$state = $row['state'];
	$zip = $row['zip'];
	$maplink = $row['maplink'];
	$description = $row['description'];
	echo "<li><strong>$meetingname, $day, $time</strong>,<br />$street<br /> $city, $state $zip, <a href=\"$maplink\" target=\"_new\">MAPLINK</a><br />$description</li><hr />";
}
echo "</ul><br />";
	};
?>

<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
</div>

<?php
include 'include/footer.php';
?>
</body>
</html>
