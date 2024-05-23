<?php
session_start();
//kwizera jean felix 222005550
// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to index.php
header("Location: index.html");
exit();
?>
