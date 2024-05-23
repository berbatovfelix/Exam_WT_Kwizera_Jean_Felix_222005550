<?php
//kwizera jean felix 222005550
//222005550
//connectivity of database.
$connection = new mysqli("localhost", "222005550", "222005550", "onlinelifecoachingservice
");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
