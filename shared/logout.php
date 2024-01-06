<?php
session_start();
session_destroy();
echo"Logout successfully";
header("location:login.html");
?>
