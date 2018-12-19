 <?php  
 session_start();
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
 header('location:discuss.php');
}
else
{
  include("login.html");
}
?> 


