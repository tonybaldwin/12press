<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="../main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press Administration</title>
</head>
<body>
<!-- 12press index --!>
<?php
include '../include/header.php';
include '../include/adminav.php';
?>

<div id="main">
<?php
echo date('Y.m.d.H.i.s');
?>

<?php
require_once('config.php');

$act = $_POST['act'];
if($act == "post") {
    $dbname = $_POST['dbname'];
    $dbuser = $_POST['dbuser'];
    $dbpass = $_POST['dbpass'];
    $dbhost = $_POST['dbhost'];
    $url = $_POST['url'];
    @$fp = fopen("config.php", 'w');
    if (!$fp) {
        //The file could not be opened
        echo "<p>Error!  Darn...config file could not be opened.</p>";
	echo "<p><a href=\"index.php\">reload</a></p>";
        exit;
    } else {
        //The file was successfully opened, lets write the entry to it.
        $outputstring =  "<?php\n\$dbname = '" . $dbname .  "';\n\$dbuser =  '" . $dbuser . "';\n\$dbpass = '" . $dbpass . "';\n\$dbhost = '" .  $dbhost . "';\n\$url = '" . $url . "';\n\$sitetitle = '" . $sitetitle . "';\n\$footext = '" . $footext . "'\n";
	
	
        //Write to the file
        fwrite($fp, $outputstring, strlen($outputstring));

        //We are finished writing, close the file for security / memory management purposes
        fclose($fp);

        //Post the success message
        echo "Your configuration was successfully entered. Click <a href=\"index.php\">here</a> to continue.";
    }
}
?>


<h4>Database:</h4>
<p>Information is displayed here for you to verify, but must be managed in the admin/config.php file manually at this time.</p>
<form action="index.php" method="post">
    <table>
        <tr>
            <td>db name:</td>
            <?php
echo "<td><input type=\"text\" name=\"dbname\" size=\"50\" value=\"$dbname\"></input></td>";
echo "</tr><tr><td>db user:</td>";
echo "<td><input type=\"text\" name=\"dbuser\" size=\"50\" value=\"$dbuser\"></input></td>";
echo "</tr><tr><td>db password:</td>";
echo "<td><input type=\"text\" name=\"dbpass\" size=\"50\" value=\"NOT DISPLAYED FOR SECURITY REASONS\"></textarea></td>";
echo "</tr><tr><td>db host:</td>";
echo "<td><input type=\"text\" name=\"dbhost\" size=\"50\" value=\"$dbhost\"></textarea></td>";
echo "</tr></tbody></table> <h4>Site Information</h4><table><tbody>";
echo "<tr><td>Site URL:</td>";
echo "<td><input type=\"text\" name=\"url\" size=\"50\" value=\"$url\"></textarea></td>";
echo "</tr><tr><td>Site Title:</td>";
echo "<td><input type=text name=sitetitle size=\"100\" value=\"$sitetitle\"></textarea></td>";
echo "</tr><tr><td>Header Message:</td>";
echo "<td><input type=text name=headtext size=\"100\" value=\"$headtext\"></textarea></td>";
echo "</tr><tr><td>Footer Message:</td>";
echo "<td><input type=text name=footext size=\"100\" value=\"$footext\"></textarea></td>";
?>
</tr></table><hr />
  <!--  <input type="hidden" name="act" value="post"></input>
    <input type="submit" name="submit" value="Submit"></input> --!>
</form>

</div>

<?php
include '../include/footer.php';
?>
</body>
</html>
