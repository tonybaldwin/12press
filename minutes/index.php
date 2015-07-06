<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" title="Orig" href="../main.css" media="screen,projection" />
<meta name="Author" content="Tony B" />
<title>12Press Area Minutes</title>
</head>
<body>
<?php
include '../include/header.php';

include '../include/navbar.php';
?>

<div id="main">

<h1>AREA MIINUTES</h1>
<ul>
<?
   // loop through files and list them
 
   $path = getcwd();
 
   $dir_handle = @opendir($path) or die("Unable to open $path");
 
   while ($file = readdir($dir_handle)) {
 
         if($file == "." || $file == ".." || $file == "index.php" || $file == ".htaccess" || $file == "robots.txt" || $file == ".index.php.swp" )
 
                 continue;
 
         echo "<li><a href=\"$file\" target=\"_new\">$file</a></li>";
 
 }
 
 closedir($dir_handle);
?>
</ul>
</div>

<?php
include '../include/footer.php';
?>
</body>
</html>
