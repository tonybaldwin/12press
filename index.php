<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include 'admin/config.php';
include 'include/ifmobi.php';
include 'include/meta.php';
echo "<title>$areaname | NA Meetings and Events</title>";
?>
<meta name="Author" content="Anthony Baldwin" />
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
echo "Date &amp; Time: ";
echo date("l");
echo ", ";
echo date('m/d/Y');
echo " - ";
echo date('g:i a');
echo "<h1>$sitetitle</h1>";
?>

<div id="announce"><h4>Announcements:<h4>
<p>This website is a test development site. None of the meetings or events listed here are real.</p>
</div>
<table><tbody><tr><th>MEETINGS TODAY</th><th>UPCOMING EVENTS</th></tr>
<tr><td valign="top" width="390">
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
	echo "<li class=\"bod\"><strong>$meetingname, $day, $time</strong>,<br />$street<br /> $city, $state $zip, <a href=\"$maplink\">MAPLINK</a><br />$description</li><br />";
}
echo "<hr /><li class=\"bod\"><strong>Meetings by Day:</strong><br />
<a href=\"$url/mbd.php?day=Sunday\">Sunday</a> | 
<a href=\"$url/mbd.php?day=Monday\">Monday</a> | 
<a href=\"$url/mbd.php?day=Tuesday\">Tuesday</a> | 
<a href=\"$url/mbd.php?day=Wednesday\">Wednesday</a> | 
<a href=\"$url/mbd.php?day=Thursday\">Thursday</a> | 
<a href=\"$url/mbd.php?day=Friday\">Friday</a> | 
<a href=\"$url/mbd.php?day=Saturday\">Saturday</a></li><br />
<li class=\"bod\"><strong>Meetings by  Town:</strong><br />
<a href=\"$url/mbt.php?city=Unknownville\">Unknownville</a></li><br />
<li class=\"bod\"><strong><a href=\"meetings.php\">Full Area Meeting List Here</a></strong> </li><br />
<li class=\"bod\"><strong><a href=\"es.php\">Reuniones en Español</a></strong> </li></ul>
</td>
<td valign=\"top\"i width=\"390\">
<ul>";


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
	echo "<li class=\"bod\"><strong>$name,<br />$date, $time</strong><br />$street,<br />$city, $state $zip <a href=\"$maplink\">MAPLINK</a><br />$description<br /><a href=\"$flylink\" target=\"_new\">see flyer for more information</a></li><br />";
}
?>
<li class="bod"><strong><a href="events.php">Complete Events List</a></strong></li><br />

</td></tr></tbody></table>
<p><br /><br /></p>
<p><br /><br />Call your Sponsor!</p>
</div>

<?php
include 'include/footer.php';
?>
</body>
</html>
