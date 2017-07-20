<?php

if($_GET["name"]== "" || $_GET["username"] == "" || $_GET["password"] == ""){
  header('Location:login.html');
  exit();
} 

else {
  $name = $_GET["name"];
  $username = $_GET["username"];
  setcookie("name",$name);
  setcookie("username",$username);
  header('Location:welcome.php');
  exit();
}
?>
