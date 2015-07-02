<?php
// 12Press header
if (file_exists('../admin/config.php')) {
include '../admin/config.php';
} else {
include 'admin/config.php';
}

echo "<div id=\"header\">";
echo "<a href=\"https://github.com/tonybaldwin/12press\"><img src=\"$url/images/12pnavbutton.png\" alt=\"12press\" border=\"0\"></a>";
echo "</div>";
?>
