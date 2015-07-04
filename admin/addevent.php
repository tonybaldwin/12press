<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="../main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press - Add Event</title>
</head>
<body>

<?php
include '../include/header.php';
include '../admin/config.php';
include '../include/adminav.php';
?>

<div id="main">
<h4>Add Event:</h4>

<form action="addevent.php" method="post">
	<input type=text name=meetingname value="Name of Event"></input>
	<input type=text name=date value="Date"></input>
	<input type=text name=time value="Time"></input>
	<input type=text name=street value="Street"></input>
	<input type=text name=city value="City"></input>
	<input type=text name=state value="State or Province"></input>
	<input type=text name=zip value="zip or postal code"></input><br />
	<input type=text name=maplink value="Link to Map"></input>
	<input type=text name=flylink value="Link to Flyer"></input>
	<input type=text name=description size=100 value="Description"></input>
	<input type="hidden" name="act" value="post"></input>
	<input type=submit name="submit" value="Submit"></input>
</form>

<?php
$act = $_POST['act'];
if($act == "post") {
	$name = $_POST['name'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$maplink = $_POST['maplink'];
	$description = $_POST['description'];
 	mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
	mysql_select_db("$dbname") or die(mysql_error());
	$query="INSERT INTO events (id, name, street, city, state, zip, maplink, flylink, description) VALUES(DEFAULT, '$name', '$street', '$city', '$state', '$zip', '$maplink','$flylink', '$description')";
	mysql_query($query) or die(mysql_error());	
	mysql_close();
    }
?>

</div>

<?php
include '../include/footer.php';
?>
</body>
</html>
