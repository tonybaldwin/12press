<?php
// 12Press header
if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div id=\"header\">";
echo "<a href=\"https://github.com/tonybaldwin/12press\"><img src=\"$siteurl/images/12pnavbutton.png\" alt=\"12press\" border=\"0\"></a>";
echo "<h1>$sitetitle</h1>";
echo "</div>";
?>
