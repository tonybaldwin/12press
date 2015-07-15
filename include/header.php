<?php
// 12Press header
if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div id=\"header\">";
echo "<a href=\"http://www.na.org\" target=\"_blank\"><img class=\"right\" src=\"$siteurl/images/nalogoT.png\" width=\"150\"></a>";
echo "<h1 class=\"nb\">$sitetitle</h1>";
echo "<h4 class=\"nb\">$headtext</h4>";
echo "<small><strong>Meetings by Day:</strong> 
<a class=\"nb\" href=\"$url/mbd.php?day=Sunday\">Sunday</a> | 
<a class=\"nb\" href=\"$url/mbd.php?day=Monday\">Monday</a> | 
<a class=\"nb\" href=\"$url/mbd.php?day=Tuesday\">Tuesday</a> | 
<a class=\"nb\" href=\"$url/mbd.php?day=Wednesday\">Wednesday</a> | 
<a class=\"nb\" href=\"$url/mbd.php?day=Thursday\">Thursday</a> | 
<a class=\"nb\" href=\"$url/mbd.php?day=Friday\">Friday</a> | 
<a class=\"nb\" href=\"$url/mbd.php?day=Saturday\">Saturday</a> | 
<strong>Meetings by  Town: </strong>
<a class=\"nb\" href=\"$url/mbt.php?city=Unknownville\">Unknownville </a> | 
<a class=\"nb\" href=\"$url/mbt.php?city=Gone City\">Gone City </a>";
echo "</small><br /></div>";
?>
