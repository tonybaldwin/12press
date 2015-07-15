<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="12Press - online meeting and event platform for 12 step recovery fellowships, NA, AA, CA, GA, SLA" />
<meta name="keywords" content="schedule, meetings, events, NA, A, CA, GA, SLA, 12 steps, recovery, online, website, free software, FOSS, open source" />
<?php
include 'include/ifmobi.php';
?>
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
echo "<p><a href=\"http://tonybaldwin.github.io/12press/\" target=\"_new\"><img class=\"nlogo\" src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\"></a></p>";
?>

<h1>ABOUT 12Press</h1>

<p><strong>This 12Press site is simply a dev-test site; None of the meetings or events presented herein are real</strong></p>

<p><a href="http://tonybaldwin.github.io/12press/">12Press</a> is an online meeting and event schedule platform for 12 step recovery fellowships and similar organizations.</p>
<?php
echo "<p><a href=\"http://tonybaldwin.github.io/12press/\">12Press</a> is <a href=\"http://www.gnu.org/philosophy/free-sw.html\" target=\"_new\">Free/Open Source Software</a>, licensed acording to the terms of the <a href=\"$siteurl/license.php\">GNU Affero General Public License, version 3 (or later)</a>.";
?>
<p>This means that you are free to download and install this software for your organization, view the code, modify the code, and share your modifications with others.</p>
<p>If you'd like to be involved in further development of this platform, please feel free to clone <a href="https://github.com/tonybaldwin/12press" target="_new">the github repo</a> and dig into the code.
Your contributions would likely be most welcome.</p>
<p>For downloads, further information, and support, see the <a href="https://github.com/tonybaldwin/12press/wiki">12Press Wiki</a></p>


</div>

<?php
include 'include/footer.php';
?>
</body>
</html>
