<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include 'include/meta.php';
include 'include/ifmobi.php';
?>
<meta name="Author" content="Anthony Baldwin" />
<title>12Press - Reuniones en Español</title>

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
<h3>Reuniones en Español:</h3>
<ul>
<?php
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
$cquery = "SELECT * FROM meetings where lang=\"es\"";
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
	echo "<li class=\"bod\"><strong>$meetingname, $day, $time</strong>,<br />$street<br /> $city, $state $zip, <a href=\"$maplink\" target=\"_new\">mapa</a><br />$description</li><br />";
}
echo "</ul><br />";
?>

<ul>
<li class="bod"><a href="http://www.narcoticosanonimos.es/?page_id=35" target="_new">Información acerca de Narcoticos Anonimos en Español<a></li><br />
<li class="bod"><a href="http://www.narcoticosanonimos.es/?page_id=45" target="_new">¿Soy adicto?</a></li><br />
<li class="bod"><strong>Llame a nuestra HOTLINE (línea de ayuda telefónica) 1-800-555-1234 para pedir ayuda en español.<br />Hay adictos bilingües listos para ayudarle.</strong></li></ul>


<h2>reuniones otros días (estos son en inglés):</h2>
<p><strong><a href="http://12press.myownsite.me/mbd.php?day=Sunday">domingo</a> | 
<a href="http://12press.myownsite.me/mbd.php?day=Monday">lunes</a> | 
<a href="http://12press.myownsite.me/mbd.php?day=Tuesday">martes</a> | 
<a href="http://12press.myownsite.me/mbd.php?day=Wednesday">miercoles</a> | 
<a href="http://12press.myownsite.me/mbd.php?day=Thursday">jueves</a> | 
<a href="http://12press.myownsite.me/mbd.php?day=Friday">viernes</a> | 
<a href="http://12press.myownsite.me/mbd.php?day=Saturday">sabado</a></strong></p>

<p><br /></p>
<p><br /></p>

</div>

<?php
include 'include/footer.php';
?>
</body>
</html>
