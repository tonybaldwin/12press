<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>TransProCloud</title>
</head>
<body>
<!-- transprocloud index --!>
<?php
include 'templates/header.php';

include 'templates/navbar.php';

ini_set('display_errors', "1");
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>

<div id="main">
<a href="https://github.com/tonybaldwin/12press"><img src="images/12press.png" width="600" alt="12press"></a>
<h4><a href="https://github.com/tonybaldwin/12press">12press</a> - online 12 step fellowship meeting and event schedule platform.</h4>
<?php
echo "TIME: ";
echo date('H:i');
echo " DATE: ";
echo date('m/d/Y');
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
$pquery = "SELECT * FROM evnts";
$pres = mysql_query($pquery);
$prows = mysql_num_rows($pres);
echo "<li>eventss listed: $prows</li>";
?>

</ul>
</div>

<?php
include 'templates/footer.php';
?>
</body>
</html>