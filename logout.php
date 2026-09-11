<?php

include("config.php");

session_unset();

session_destroy();

header("Location: login.php");

exit();

?>
<?php
session_start();

// Session remove
$_SESSION = array();

// Session destroy
session_destroy();

// Browser cache remove
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Redirect to Home
header("Location: login.php");
exit();
?>