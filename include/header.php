<?php
// 12Press header
if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div id=\"header\">";
echo "<h1 class=\"nb\">$sitetitle</h1>";
echo "<h4 class=\"nb\">$headtext</h4>";
echo "<small><strong>Meetings by Day:</strong>: 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbd.php?day=Sunday\">Sunday</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbd.php?day=Monday\">Monday</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbd.php?day=Tuesday\">Tuesday</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbd.php?day=Wednesday\">Wednesday</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbd.php?day=Thursday\">Thursday</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbd.php?day=Friday\">Friday</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbd.php?day=Saturday\">Saturday</a> | 
<strong>Meetings by  Town: </strong>
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=Branford\">Branford</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=East Haven\">East Haven</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=Hamden\">Hamden</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=Milford\">Milford</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=New Haven\">New Haven</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=North Branford\">North Branford</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=North Haven\">North Haven</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=West Haven\">West Haven</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=Wallingford\">Wallingford</a> | 
<a class=\"nb\" href=\"http://gnhana.liberame.org/mbt.php?city=Woodbridge\">Woodbridge</a>";
echo "</small><br /></div>";
?>
