<?php 
if (isset($_COOKIE["name"]) && isset($_COOKIE["username"])) 
	echo "Welcome " . $_COOKIE["name"] . "! Your Username is " . $_COOKIE["username"]. "!<br>"; 

else 
	header('Location:login.html');
    exit();
?>
