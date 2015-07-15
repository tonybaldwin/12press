
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
echo "<p>Unknown, ST Area<br />NA HOTLINE:<br /><a class=\"nb\"href=\"tel:1-800-555-1234\">800-555-1234</a> </p>";
echo "<h4 class=\"nb\">Navigation:</h4>";
echo "<ul><li class=\"nb\"><a class=\"nb\" href=\"$url/index.php\">HOME</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/meetings.php\">MEETINGS</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/es.php\">EN ESPAÑOL</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/events.php\">EVENTS</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/subcommittees.php\">SUBCOMMITTEES</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/minutes/\">Area Minutes</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/flyers/\">Event Flyers</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/who.php\">Who is an Addict?</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/why.php\">Why are WE Here?</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/what.php\">What is NA?</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/steps.php\">The 12 Steps</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/traditions.php\">The 12 Traditions</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/concepts.php\">The 12 concepts</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/jft.php\">Just for Today</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/wdr.php\">We Do Recover</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/help.php\">HELP</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"$url/admin/\">ADMIN</a></li>";
echo "<li class=\"nb\"><a class=\"nb\" href=\"mailto:webservant@unknownna.org\">email Unknown Area NA webservant</a></li></ul>";
// echo "<li><a class=\"nb\" href=\"$url/12press.php\">About 12Press</a></li></ul>";
?>
<hr />
<?php
echo "<p align=\"center\"><small>powered by<br /><a href=\"12press.php\"><img class=\"center\" src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\" width=\"150\" border=\"0\"></a>";
?>
<p><br/><br/></p>
<p><br/><br/></p>
<p><br/><br/></p>
<p><br/><br/></p>
<p><br/><br/></p>
<p><br/><br/></p>
</div>

