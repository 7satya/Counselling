<html>
<head>
    <meta charset="utf-8">
    <title>Yet To Decide</title>
    <script>
function myFunction() {
    alert("I am an alert box!");
}
</script>
</head>



<?php
session_start();

if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
      $hello =$_SESSION['email'];
      $text=$_POST['ques'];

      $link = mysqli_connect('localhost', 'root', '','counselling');

      $sql="Insert into question values (DEFAULT,'$text','$hello')";
     $result=mysqli_query($link,$sql);
     
    if($result)
      {
       echo "<body onload='myFunction()'></body>";
       header('location:discuss.php');
       
      }
    
}

?>

</html>
