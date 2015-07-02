<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press - GNHA NA Events</title>
</head>
<body>
<?php
include 'templates/header.php';

include 'templates/navbar.php';

ini_set('display_errors', "1");
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>

<div id="main">

<?php
echo "TIME: ";
echo date('H:i');
echo " DATE: ";
echo date('m/d/Y');
echo "<h1>$sitetitle</h1>";
?>
<ul>
<?php
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
$cquery = "SELECT * FROM meetings";
$cres = mysql_query($cquery);
$crows = mysql_num_rows($cres);
echo "<li>Meetings listed: $crows</li>";
?>
<?php
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
$pquery = "SELECT * FROM events";
$pres = mysql_query($pquery);
$prows = mysql_num_rows($pres);
echo "<li>events listed: $prows</li>";
?>

</ul>
</div>

<?php
include 'templates/footer.php';
?>
</body>
</html>
