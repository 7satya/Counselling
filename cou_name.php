
  
    <?php
         $cou_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
       
        $sql="select course_name
              from course
              where course_id ='$cou_id';";

         $result=mysqli_query($link,$sql);

         while ($row =mysqli_fetch_array($result))
        {
            echo "What is " .$row['course_name']."?" ;
        }
   
?>
