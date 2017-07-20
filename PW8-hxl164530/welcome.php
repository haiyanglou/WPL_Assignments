<?php
 session_start();
 if (!isset($_SESSION['username']) || trim($_SESSION['username']) == ""){
  header('Location:login.html');
  exit();
 }
 else {
  echo "<img src='/PW8/img/" .$_SESSION['avatar'] ."' alt='/PW8/img/1.png' >";
  echo "Welcome! Dear ".$_SESSION['fullname'];
 }
?>
