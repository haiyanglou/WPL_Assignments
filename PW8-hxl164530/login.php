<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$con=mysqli_connect("localhost","root","root","PW8");

$query = "SELECT * FROM Users WHERE username = '$username';";
// escape variables for security
$result = mysqli_query($con,$query);
if($result->num_rows == 0 || $username=="" || $password ==""){ // User not found, or info not given So, redirect to login_form again.
   header('Location: login.html');
   exit();
} 
   $userData = mysqli_fetch_assoc($result);
   mysqli_close($con);

if($password!= $userData['password']){ // Incorrect password. So, redirect to login_form again.
   	header('Location: login.html');
   	exit();
   }
   else{ // Redirect to home page after successful login.
   session_regenerate_id(); //recommended since the user session is now authenticated
   $_SESSION['username'] = $userData['username'];
   $_SESSION['fullname'] = $userData['fullname'];
   $_SESSION['sess_email'] = $userData['email'];
   $_SESSION['avatar'] = $userData['avatar'];
   session_write_close();
   header('Location:welcome.php');
   }
?>