<?php

include("config.php");

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
    exit();

}

?>
<?php
// session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Cache disable
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>