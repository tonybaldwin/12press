<?php

# left navigation bar
# tony baldwin | http://tonybaldwin.me
#

if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div id=\"navbar\">";
echo "<img class=\"center\" src=\"$siteurl/images/nalogo.png\">";
echo "<h4 class=\"nb\">Navigation:</h4>";
echo "<ul><li><a class=\"nb\" href=\"$url/index.php\">HOME</a>";
echo "</li><li><a class=\"nb\" href=\"$url/meetings.php\">MEETINGS</a></li>";
echo "<li><a class=\"nb\" href=\"$url/events.php\">EVENTS</a></li>";
echo "<li><a class=\"nb\" href=\"$url/admin/\">ADMIN</a></li>";
echo "<li><a class=\"nb\" href=\"$url/help.php\">HELP</a></li>";
echo "<li><a class=\"nb\" href=\"$url/about.php\">ABOUT</a></li></ul>";
echo "<p><a class=\"nb\"  href=\"http://www.ctna.org\">CT Region<br />Narcotics Anonymous</a></p>";
echo "<p align=\"center\"><small>powered by <a class=\"nb\" href=\"https://github.com/tonybaldwin/12press\">12Press</a></p>";
echo "</div>";
?>
