<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press | Greater New Haven Area Narcotics Anonymous | NA Meetings and Events</title>
</head>
<body>
<?php
include 'include/header.php';
include 'admin/config.php';
include 'include/navbar.php';
include 'include/ifmobi.php';

ini_set('display_errors', "1");
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>

<div id="main">
<?php
echo "<img src=\"$siteurl/images/GNHANA-quinniriverbanner.jpg\"><br />";
date_default_timezone_set('America/New_York');
echo "TIME: ";
echo date('H:i');
echo " DATE: ";
echo date('m/d/Y');
echo "<br />Today is ";
echo date("l");
echo "<h1>$sitetitle</h1>";
?>


<table><tbody><tr><th>MEETINGS TODAY</th><th>UPCOMING EVENTS</th></tr>
<tr><td valign="top">
<ul>
<?php
$today = date("l");
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
$cquery = "SELECT * FROM meetings where day=\"$today\"";
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
	echo "<li><strong>$meetingname, $day, $time</strong>,<br />$street<br /> $city $state $zip, <a href=\"$maplink\">map link</a><br />$description</li><hr />";
}
echo "</ul><br />";
?>
<p><a href="meetings.php">Full Meeting List Here</a></p>
</td>
<td valign="top">
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
	echo "<li><strong>$name,<br />$date, $time</strong><br />$street,<br />$city $state $zip <a href=\"$maplink\">MAP</a><br />$description<br /><a href=\"$flylink\">see flyer for more information</a></li><hr />";
}
?>
</ul>
</td></tr></tbody></table>

</div>

<?php
include 'include/footer.php';
?>
</body>
</html>
