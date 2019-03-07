<?php 
ob_start();
session_start();
if ($_SESSION['name']!="tutorial") {
   header('location: front.php');
 } 
?>
