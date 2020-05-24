<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['email']);
header('location:index.php');
?>