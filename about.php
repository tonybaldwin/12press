<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="main.css" media="screen,projection" />
<meta name="Author" content="Tony B" />
<title>12Press</title>
</head>
<body>
<!-- transprocloud index --!>
<?php
include 'templates/header.php';
include 'admin/config.php';
include 'templates/navbar.php';
?>

<div id="main">
<?php 

echo "<p><a href=\"https://github.com/tonybaldwin/12press\"><img src=\"$siteurl/images/12Press.png\" width=\"300\" alt=\"12press\"></a></p>";
?>

<h4>ABOUT 12Press</h4>

<p><a href="https://github.com/tonybaldwin/12press">12Press</a> is an online 12 step fellowship meeting and event database front-end, written in php with a mysql backend.</p>
<?php
echo "<p><a href=\"https://github.com/tonybaldwin/12press\">12Press</a> is <a href=\"http://www.gnu.org/philosophy/free-sw.html\">Free/Open Source Software</a>, licensed acording to the terms of the <a href=\"$siteurl/license.php\">GNU Affero General Public License, version 3 (or later)</a>.";
?>
<p>For further information and support, see: <a href="https://github.com/tonybaldwin/12press">12Press</a></p>

</div>

<?php
include 'templates/footer.php';
?>
</body>
</html>
