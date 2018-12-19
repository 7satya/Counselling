<?php
if($_POST['Register']=='Signup')
{
 
 $Password=$_POST['password'];
 $Name=$_POST['name'];
 $Mobile=$_POST['phone'];
 $Email=$_POST['email'];
 $college=$_POST['college'];
 $about=$_POST['about'];
$target_dir = "images/";
if($_FILES["profilep"]["name"])
{

$target_file = $target_dir . basename($_FILES["profilep"]["name"]);
$uploadOk = 1;
 $file_name=$_FILES["profilep"]["name"];

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$s=move_uploaded_file( $_FILES['profilep']['tmp_name'], $target_dir . basename($_FILES['profilep']['name'] ) );
}
 $link = mysqli_connect('localhost', 'root', '','counselling');

if(!$link) { 
die('Failed to connect to server: ' . mysqli_error());

}

$qry="INSERT INTO users(email,pass,name, phone,college,about,profilep) VALUES ('$Email','$Password','$Name',$Mobile,'$college','$about','$file_name')";
$result=mysqli_query($link,$qry);
echo $result;	
if($result == FALSE){ 
echo mysqli_error() . '<br>';
echo 'User with Same Email Already Exists'; }
else{

	session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['email'] = $Email; 
header('location:discuss.php'); 

 }

}
?>

