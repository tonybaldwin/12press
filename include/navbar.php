
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
echo "<p>CTNA HOTLINE:<br />1-800-627-3543 </p>";
echo "<h4 class=\"nb\">Navigation:</h4>";
echo "<ul><li class=\"nb\"><a class=\"nb\" href=\"$url/index.php\">HOME</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/meetings.php\">MEETINGS</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/es.php\">EN ESPAÑOL</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/events.php\">EVENTS</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/subcommittees.php\">SUBCOMMITTEES</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/minutes/\">Area Minutes</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/flyers/\">Event Flyers</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/what.php\">What is NA?</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/steps.php\">The 12 Steps</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/traditions.php\">The 12 Traditions</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/help.php\">HELP</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/admin/\">ADMIN</a></li></ul>";
// echo "<li><a class=\"nb\" href=\"$url/12press.php\">About 12Press</a></li></ul>";
?>
<h5 class="nb">Regional Links:</h5>
<p><a class="nb"  href="http://www.ctna.org">CT Region<br />Narcotics Anonymous</a></p>
<p align="center"><small>&copy; GNHANA</small></p>
<hr />
<?php
echo "<p align=\"center\"><small>powered by<br /><a href=\"https://github.com/tonybaldwin/12press/wiki\" target=\"_new\"><img class=\"center\" src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\" width=\"150\" border=\"0\"></a>";
?>
</div>

