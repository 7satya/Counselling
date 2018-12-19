

<?php 
if ($_POST['Login'] == 'submit'){ 
//Collect POST values 
$Username = $_POST['username']; 
$password = $_POST['password']; 

$link = mysql_connect('localhost', 'root', ''); 
echo 'sbu';
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('councelling'); 
if(!$db) { 
die("Unable to select database"); 
} 
$myusername = stripslashes($Username);
$mypassword = stripslashes($password);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT Cust_id,Password FROM Customers WHERE Cust_id='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
echo 'hdsb';
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

if( $count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $Username; 
header('location:index.html'); 
} 
else{ 
//Login failed 
echo '<center>Incorrect Username or Password !!!<a href="clogin.html">Login Again</a><center>'; 



exit(); 
} 
} 



?>
