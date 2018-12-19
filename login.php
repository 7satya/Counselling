<?php 
if ($_POST['submit'] == 'Sign In'){ 
//Collect POST values 
$Email = $_POST['email']; 
$password = $_POST['password'];

$link = mysqli_connect('localhost', 'root', '','counselling'); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 

$myemail = stripslashes($Email);
$mypassword = stripslashes($password);
$sql="SELECT email,pass FROM users WHERE email='$myemail' and pass='$mypassword'";
$result=mysqli_query($link,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

if( $count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['email'] = $Email; 
header('location:discuss.php'); 
} 
else{ 
//Login failed 
echo '<center>Incorrect Username or Password !!!<a href="login.html">Login Again</a><center>'; 



exit(); 
} 
} 



?>
