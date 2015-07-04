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
// echo "<img src=\"$siteurl/images/GNHANA-quinniriverbanner.jpg\"><br />";
date_default_timezone_set('America/New_York');
echo "Date &amp; Time: ";
echo date("l");
echo ", ";
echo date('m/d/Y');
echo " - ";
echo date('H:i a');
echo "<h1>$sitetitle</h1>";
?>


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
echo "<hr />";
?>
<li class="bod"><a href="meetings.php">Full Area Meeting List Here</a></li></ul>
</td>
<td valign="top"i width="390">
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
	echo "<li class=\"bod\"><strong>$name,<br />$date, $time</strong><br />$street,<br />$city, $state $zip <a href=\"$maplink\">MAPLINK</a><br />$description<br /><a href=\"$flylink\">see flyer for more information</a></li><br />";
}
?>
<hr />
<li class="bod"><strong>Meetings by Day:<br />
<a href="http://gnhana.liberame.org/mbd.php?day=Sunday">Sunday</a> | 
<a href="http://gnhana.liberame.org/mbd.php?day=Monday">Monday</a> | 
<a href="http://gnhana.liberame.org/mbd.php?day=Tuesday">Tuesday</a> | 
<a href="http://gnhana.liberame.org/mbd.php?day=Wednesday">Wednesday</a> | 
<a href="http://gnhana.liberame.org/mbd.php?day=Thursday">Thursday</a> | 
<a href="http://gnhana.liberame.org/mbd.php?day=Friday">Friday</a> | 
<a href="http://gnhana.liberame.org/mbd.php?day=Saturday">Saturday</a></li><br />
<li class="bod"><strong>Meetings by  Town:</strong><br />
<a href="http://gnhana.liberame.org/mbt.php?city=Branford">Branford</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=East Haven">East Haven</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=Hamden">Hamden</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=Milford">Milford</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=New Haven">New Haven</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=North Branford">North Branford</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=North Haven">North Haven</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=West Haven">West Haven</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=Wallingford">Wallingford</a> | 
<a href="http://gnhana.liberame.org/mbt.php?city=Woodbridge">Woodbridge</a></li><br />
</ul>
</td></tr></tbody></table>

</div>

<?php
include 'include/footer.php';
?>
</body>
</html>
