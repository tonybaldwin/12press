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
echo "<small><a class=\"nb\" href=\"https://github.com/tonybaldwin/12press\">12Press</a> by Tony B is FREE and Open Source Software, released according to the terms of the <a class=\"nb\" href=\"$url/license.php\">Gnu Affero Public License.</small>";
echo "</div>";
?>
