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
echo "<h4>Navigation:</h4>";
echo "<ul><li><a href=\"$siteurl/admin/config.php\">Configure</a></li>";
echo "<ul><li><a href=\"$url/index.php\">HOME</a>";
echo "</li><li><a href=\"$url/meetings.php/\">MEETINGS</a></li>";
echo "</li><li><a href=\"$url/admin/addmeeting.php/\">ADD A MEETING</a></li>";
echo "</li><li><a href=\"$url/admin/editmeeting.php/\">EDIT MEETING</a></li>";
echo "<li><a href=\"$url/events.php/\">EVENTS</a></li>";
echo "<li><a href=\"$url/admin/addevent.php/\">ADD EVENT</a></li>";
echo "<li><a href=\"$url/admin/editevent.php/\">EDIT EVENT</a></li>";
echo "<li><a href=\"$url/admin/\">ADMIN</a></li>";
echo "<li><a href=\"$url/help.php\">HELP</a></li>";
echo "<li><a href=\"$url/about.php\">ABOUT</a></li></ul>";
echo "</div>";
?>
