<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="main.css" media="screen,projection" />
<meta name="Author" content="Tony B" />
<title>12Press | About 12Press</title>
</head>
<body>
<?php
include 'include/header.php';
include 'admin/config.php';
include 'include/navbar.php';
?>

<div id="main">
<?php 

echo "<p><a href=\"https://github.com/tonybaldwin/12press\"><img src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\"></a></p>";
?>

<h1>ABOUT 12Press</h1>

<p><strong>This 12Press site belongs to the Greater New Haven Area of the <a href="http://www.ctna.org">CT Region of Narcotics Anonymous</a>.</strong></p>

<p><a href="https://github.com/tonybaldwin/12press/wiki">12Press</a> is an online meeting and event schedule platform for 12 step recovery fellowships and similar organizations.</p>
<?php
echo "<p><a href=\"https://github.com/tonybaldwin/12press/wiki\">12Press</a> is <a href=\"http://www.gnu.org/philosophy/free-sw.html\">Free/Open Source Software</a>, licensed acording to the terms of the <a href=\"$siteurl/license.php\">GNU Affero General Public License, version 3 (or later)</a>.";
?>
<p>This means that you are free to download and install this software for your organization, view the code, modify the code, and share your modifications with others.<br />
If you'd like to be involved in further development of this platform, please feel free to clone <a href="https://gibhut.com/tonybaldwin/12press">the github repo</a> and dig into the code.<br />
Your contributions would likely be most welcome.</p>
<p>For further information and support, see the <a href="https://github.com/tonybaldwin/12press/wiki">12Press Wiki</a></p>


</div>

<?php
include 'include/footer.php';
?>
</body>
</html>
