<?php

# admin navigation bar
# tony baldwin | http://tonybaldwin.me
#

if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div id=\"navbar\">";
echo "<h4 class=\"nb\">Navigation:</h4>";
echo "<a href=\"http://www.na.org\" target=\"_blank\"><img class=\"nlogo\" src=\"$siteurl/images/nalogo.jpg\" width=\"150\"></a>";
echo "<ul><li><a class=\"nb\" href=\"$url/index.php\">HOME</a>";
echo "<li><a class=\"nb\" href=\"$url/meetings.php/\">MEETINGS</a></li>";
echo "<li><a class=\"nb\" href=\"$url/admin/addmeeting.php\">ADD A MEETING</a></li>";
echo "<li><a class=\"nb\" href=\"$url/admin/editmeeting.php\">EDIT MEETING</a></li>";
echo "<li><a class=\"nb\" href=\"$url/events.php/\">EVENTS</a></li>";
echo "<li><a class=\"nb\" href=\"$url/admin/addevent.php\">ADD EVENT</a></li>";
echo "<li><a class=\"nb\" href=\"$url/admin/eventlist.php\">EDIT EVENT</a></li>";
echo "<li><a class=\"nb\" href=\"$url/admin/\">ADMIN</a></li>";
echo "<li><a class=\"nb\" href=\"$url/help.php\">HELP</a></li>";
echo "<li><a class=\"nb\" href=\"$url/12press.php\">ABOUT</a></li></ul>";
echo "<p><br /><br /></p>";
echo "<p align=\"center\"><small>powered by<br /><a href=\"12press.php\"><img class=\"center\" src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\" width=\"150\" border=\"0\"></a>";
echo "<p><br /><br /></p>";
echo "<p><br /><br /></p>";
echo "<p><br /><br /></p>";
echo "</div>";
?>
