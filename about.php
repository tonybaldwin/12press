<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="main.css" media="screen,projection" />
<meta name="Author" content="Tony B" />
<title>12Press</title>
</head>
<body>
<?php
include 'templates/header.php';
include 'admin/config.php';
include 'templates/navbar.php';
?>

<div id="main">
<?php 

echo "<p><a href=\"https://github.com/tonybaldwin/12press\"><img src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\"></a></p>";
?>

<h4>ABOUT 12Press</h4>

<p><a href="https://github.com/tonybaldwin/12press">12Press</a> - an online meeting and event schedule platform for 12 step recovery fellowships and similar organizations.</p>
<?php
echo "<p><a href=\"https://github.com/tonybaldwin/12press\">12Press</a> is <a href=\"http://www.gnu.org/philosophy/free-sw.html\">Free/Open Source Software</a>, licensed acording to the terms of the <a href=\"$siteurl/license.php\">GNU Affero General Public License, version 3 (or later)</a>.";
?>
<p>For further information and support, see: <a href="https://github.com/tonybaldwin/12press">12Press</a></p>

<p>This 12Press site belongs to the Greater New Haven Area of the <a href="http://www.ctna.org">CT Region of Narcotics Anonymous</a>.</p>

</div>

<?php
include 'templates/footer.php';
?>
</body>
</html>
