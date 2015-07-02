<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="../main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press</title>
</head>
<body>

<?php
include '../templates/header.php';
include '../admin/config.php';
include '../templates/navbar.php';
?>

<div id="main">
<h4>Add Meeting:</h4>

<form action="addmeeting.php" method="post">
	<input type=text name=meetingname value="Name of Meeting"></input>
	<input type=text name=Time value="Day &amp; Time"></input>
	<input type=text name=street value="Street"></input>
	<input type=text name=city value="city"></input>
	<input type=text name=state value="state or province"></input>
	<input type=text name=zip value="zip or postal code"></input>
	<input type=text name=maplink value="Link to map"></input>
	<input type=text name=description size=100 value="Format/notes"></input>
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
	$description$_POST['description'];
 	mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
	mysql_select_db("$dbname") or die(mysql_error());
	$query="INSERT INTO meetings (name, street, city, state, country, zip, maplink, description) VALUES('$name', '$street', '$city', '$state', $country', '$zip', '$maplink', '$description')";
	mysql_query($query) or die('Error, insert query failed');	
	mysql_close();
    }
?>

</div>

<?php
include '../templates/footer.php';
?>
</body>
</html>
