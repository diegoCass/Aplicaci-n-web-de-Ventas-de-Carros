<?php
if(empty($_SESSION["id"])){
    header("location: ../login.php");
   }

session_start();
session_destroy();
header("location: ../login.php");
?>