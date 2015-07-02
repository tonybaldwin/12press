<?php
// 12Press footer
if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div style=\"clear:both\"></div>";
echo "<p><br /><br /><br /></p>";
echo "<div id=\"footer\">";
echo "<p align=\"center\">$footext</p>";
echo "</div>";
?>
