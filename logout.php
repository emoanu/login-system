<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['email']);
// echo "Thank you.Visit again.";
header('location:sign_out.php');
?>
