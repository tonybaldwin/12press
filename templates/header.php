<?php
// 12Press header
if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div id=\"header\">";
echo "<a href=\"https://github.com/tonybaldwin/12press\"><img class=\"right\" src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\" border=\"0\"></a>";
echo "<h1 class=\"nb\">$sitetitle</h1>";
echo "<p>Our message is HOPE, and the promise of FREEDOM!</p>";
echo "</div>";
?>
