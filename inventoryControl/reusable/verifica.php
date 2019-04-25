<?php
  session_start();
  if(!$_SESSION['$email']){
    session_destroy();
    header('Location: login.php');
  exit;
  }
?>
