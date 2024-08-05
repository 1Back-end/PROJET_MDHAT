<?php
session_start();
if (!isset($_SESSION["id_personnel"])) {
    header("Location:login.php");
    exit();
}
?>
