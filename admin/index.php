<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="../main.css" media="screen,projection" />
<meta name="Author" content="Tony B." />
<title>12-press</title>
</head>
<body>
<!-- 12press index --!>
<?php
include '../templates/header.php';
include '../templates/navbar.php';
?>

<div id="main">
<?php
date_default_timezone_set('America/New_York');
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
        $outputstring =  "<?php\n\$dbname = '" . $dbname .  "';\n\$dbuser =  '" . $dbuser . "';\n\$dbpass = '" . $dbpass . "';\n\$dbhost = '" .  $dbhost . "';\n\$url = '" . $url . "';\n\$estax = '" . $estax . "';\n";
	
        //Write to the file
        fwrite($fp, $outputstring, strlen($outputstring));

        //We are finished writing, close the file for security / memory management purposes
        fclose($fp);

        //Post the success message
        echo "Your configuration was successfully entered. Click <a href=\"index.php\">here</a> to continue.";
    }
}
?>
<h2>Database:</h2>
<form action="index.php" method="post">
</tr></table>
    <input type="hidden" name="act" value="post"></input>
    <input type="submit" name="submit" value="Submit"></input>
</form>

</div>

<?php
include '../templates/footer.php';
?>
</body>
</html>
