<script>
<!--
function land(ref, target)
{
	lowtarget=target.toLowerCase();
	if (lowtarget=="_self") {window.location=loc;}
	else {if (lowtarget=="_top") {top.location=loc;}
		else {if (lowtarget=="_blank") {window.open(loc);}
			else {if (lowtarget=="_parent") {parent.location=loc;}
				else {parent.frames[target].location=loc;};
			}}}
}
function jump(menu)
{
	ref=menu.choice.options[menu.choice.selectedIndex].value;
	splitc=ref.lastIndexOf("*");
	target="";
	if (splitc!=-1)
	{loc=ref.substring(0,splitc);
	target=ref.substring(splitc+1,1000);}
	else {loc=ref; target="_self";};
	if (ref != "") {land(loc,target);}
}
//-->
</script>

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
<h5 class="nb">Meeting Schedules for Each Week Day:</h5>
<form action="/mbd.php" method="get"><select name="choice" size="1" onChange="jump(this.form)"><option value="">Choose a day</option><option value="http://gnhana.liberame.org/mbd.php?day=Sunday">Sunday</option><option value="http://gnhana.liberame.org/mbd.php?day=Monday">Monday</option><option value="http://gnhana.liberame.org/mbd.php?day=Tuesday">Tuesday</option><option value="http://gnhana.liberame.org/mbd.php?day=Wednesday">Wednesday</option><option value="http://gnhana.liberame.org/mbd.php?day=Thursday">Thursday</option><option value="http://gnhana.liberame.org/mbd.php?day=Friday">Friday</option><option value="http://gnhana.liberame.org/mbd.php?day=Saturday">Saturday</option></select></form>
<h5 class="nb">Regional Links:</h5>
<p><a class="nb"  href="http://www.ctna.org">CT Region<br />Narcotics Anonymous</a></p>
<p align="center"><small>&copy; GNHANA</small></p>
<hr />
<?php
echo "<p align=\"center\"><small>powered by<br /><a href=\"https://github.com/tonybaldwin/12press/wiki\" target=\"_new\"><img class=\"center\" src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\" width=\"150\" border=\"0\"></a>";
?>
</div>

