
<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
    
      $hello =$_SESSION['email'];


      $text=$_POST['ans'];
    
      $link = mysqli_connect('localhost', 'root','','counselling');
    $ques_id=$_SESSION['hey'];
    
      $sql="Insert into answer(ans_id,ans,upvotes,vws,ques_id,email) value(DEFAULT,'$text',DEFAULT,DEFAULT,'$ques_id','$hello');";
      $result=mysqli_query($link,$sql);
     
     if($result)
      {
       
       header('location:answerpage.php');
      }
    else
          echo "ERROR!!!!!!!";
    
}
?>

