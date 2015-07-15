<!DOCTYPE html>
<html lang="en"><head>
<link rel="stylesheet" type="text/css" title="Orig" href="../main.css" media="screen,projection" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include 'include/meta.php';
include 'include/ifmobi.php';
?>
<meta name="Author" content="Anthony Baldwin" />
<title>12Press List Events</title>
</head>
<body>
<?php
include '../include/header.php';
include 'config.php';
include '../include/adminav.php';

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
<h2>Choose an event to edit:</h2>
<ul>
<?php
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
$equery = "SELECT * FROM events";
$eres = mysql_query($equery);
while($row = mysql_fetch_assoc($eres))
{
	$id = $row['id'];
	$name = $row['name'];
	$date = $row['date'];
	$time = $row['time'];
	$street = $row['street'];
	$city = $row['city'];
	$state = $row['state'];
	$zip = $row['zip'];
	$maplink = $row['maplink'];
	$flylink = $row['flylink'];
	$description = $row['description'];
echo "<li class=\"bod\"><strong> $id: $name, $date, $time</strong> | $street, $city, $state $zip | <a href=\"$maplink\">MAP</a><br />$description | <a href=\"$flylink\">see flyer for more information</a><br /><strong><a href=\"$siteurl/admin/editevent.php?id=$id\">EDIT THIS EVENT</a><br /></strong></li><br />";
}
?>

</ul>
</div>

<?php
include '../include/footer.php';
?>
</body>
</html>
