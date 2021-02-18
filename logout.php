<?php
session_start();
unset($_SESSION["userID"]);
unset($_SESSION["password"]);
header("Location:signin.php");
?>
