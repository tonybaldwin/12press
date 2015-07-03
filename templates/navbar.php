<?php

# left navigation bar
# tony baldwin | http://tonybaldwin.me
#

if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div style=\"clear:both\"></div>";
echo "<div id=\"navbar\">";
echo "<a href=\"http://www.na.org\" target=\"_blank\"><img class=\"nlogo\" src=\"$siteurl/images/nalogo.jpg\" width=\"150\"></a>";
echo "<h4 class=\"nb\">Navigation:</h4>";
echo "<ul><li><a class=\"nb\" href=\"$url/index.php\">HOME</a></li>";
echo "<li><a class=\"nb\" href=\"$url/meetings.php\">MEETINGS</a></li>";
echo "<li><a class=\"nb\" href=\"$url/events.php\">EVENTS</a></li>";
echo "<li><a class=\"nb\" href=\"$url/subcommittees.php\">SUBCOMMITTEES</a></li>";
echo "<li><a class=\"nb\" href=\"$url/admin/\">ADMIN</a></li>";
echo "<li><a class=\"nb\" href=\"$url/help.php\">HELP</a></li>";
echo "<li><a class=\"nb\" href=\"$url/about.php\">ABOUT</a></li>";
echo "<li><a class=\"nb\" href=\"$url/what.php\">What is NA?</a></li>";
echo "<li><a class=\"nb\" href=\"$url/steps.php\">The 12 Steps</a></li>";
echo "<li><a class=\"nb\" href=\"$url/traditions.php\">The 12 Traditions</a></li></ul>";
echo "<h5 class=\"nb\">Regional Links:</h5>";
echo "<p><a class=\"nb\"  href=\"http://www.ctna.org\">CT Region<br />Narcotics Anonymous</a></p>";
echo "<p>CTNA HOTLINE:<br />800-627-3543 </p>";
echo "<p align=\"center\"><small>powered by <a class=\"nb\" href=\"https://github.com/tonybaldwin/12press/wiki\" target=\"_new\">12Press</a></p>";
echo "<p><br /><br /></p>";
echo "<p><br /><br /></p>";
echo "</div>";
?>
