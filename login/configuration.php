<?php
// Definition des droits d'acces
$role_user = $_SESSION['user_role']; 
$IsAdmin= ($role_user == 1) ? true : false; 
$IsPersonnel= ($role_user == 2) ? true : false; 
?>