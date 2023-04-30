<?php
session_start();
session_destroy();
header('Location: hardwareLogin.php');
exit;
?>