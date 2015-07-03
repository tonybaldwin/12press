<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="../../main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press - Add a Meeting</title>
</head>
<body>

<?php
include '../templates/header.php';
include 'config.php';
include '../templates/adminav.php';
?>

<div id="main">
<?php
echo "<h1>$sitetitle</h1>";
?>
<h4>Add a Meeting:</h4>

<form action="addmeeting.php" method="post">
	<input type=text name=name value="meeting name"></input>
	<input type=text name=day value="day"></input>
	<input type=text name=time value="time"></input><br />
	<input type=text name=street value="street address"></input>
	<input type=text name=city value="city"></input>
	<input type=text name=state value="state or province"></input><br />
	<input type=text name=zip value="zip or postal code"></input>
	<input type=text name=maplink value="maplink"></input><br />
	<input type=text size=180 name=description value="format/description/notes"></input><br />
	<input type="hidden" name="act" value="post"></input>
	<input type=submit name="submit" value="Submit"></input>
</form>

<?php
$act = $_POST['act'];
if($act == "post") {
	$name = $_POST['name'];
	$timeday = $_POST['timeday'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$maplink = $_POST['maplink'];
	$decription = $_POST['description'];
 	mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
	mysql_select_db("$dbname") or die(mysql_error());
	$query="INSERT INTO meetings (name, day, time, street, city, state, zip, maplink, description) VALUES(DEFAULT,'$name', '$day', '$time', '$street', '$city', '$state', '$maplink', '$country', '$zip', '$description')";
	mysql_query($query) or die(mysql_error());	
	mysql_close();
    }
?>

</div>

<?php
include '../templates/footer.php';
?>
</body>
</html>
