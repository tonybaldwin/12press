<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="../main.css" media="screen,projection" />
<meta name="Author" content="Anthony Baldwin" />
<title>12Press Edit Event</title>
</head>
<body>
<?php
include '../include/header.php';
include '../admin/config.php';
include '../include/adminav.php';
?>

<div id="main">

<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : false;
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());
if (isset($id)) {
$query  = "SELECT * FROM events where id = \"$id\"";
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result))
{
	$id = $row['id'];
	$name = $row['name'];
	$date = $row['date'];
	$time = $row['time'];
	$street = $row['street'];
	$city = $row['city'];
	$zip = $row['zip'];
	$state = $row['state'];
	$country = $row['country'];
	$maplink = $row['maplink'];
	$flylink = $row['flylink'];
	$description = $row['description'];
}
echo "<form action=\"editevent.php\" method=\"post\">
	<input type=text name=meetingname value=\"$name\"></input>
	<input type=text name=date value=\"$date\"></input>
	<input type=text name=time value=\"$time\"></input>
	<input type=text name=street value=\"$street\"></input>
	<input type=text name=city value=\"$city\"></input>
	<input type=text name=state value=\"$state\"></input>
	<input type=text name=zip value=\"$zip\"></input><br />
	<input type=text name=maplink value=\"$maplink\"></input>
	<input type=text name=flylink value=\"$flylink\"></input>
	<input type=text name=description size=100 value=\"$description\"></input>
	<input type=\"hidden\" name=\"act\" value=\"post\"></input>
	<input type=submit name=\"submit\" value=\"Submit\"></input> </form>";
 
 //	mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
//	mysql_select_db("$dbname") or die(mysql_error());
	$query="update events set name='$name', date='$date', time='$time', street='$street', city='$city', state='$state', zip='$zip', maplink='$maplink', flylink='$flylink', description='$description' where id='$id'";
	mysql_query($query) or die(mysql_error());	
	mysql_close();

	echo "<h4>Event updated.</h4> <p><a href=\"editevent.php?id=$id\">Refresh page to verify results</a>.</p>";
};   

?>

</div>

<?php
include '../include/footer.php';
?>
</body>
</html>
