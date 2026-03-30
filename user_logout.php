<?php
session_start();
session_destroy();

setcookie("success", "Logged out successfully", time()+5);

header("Location: login.php");
exit();
?>