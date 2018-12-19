<?php
         $col_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
        
        $sql="select placement
              from college
              where college_id ='$col_id';";
        
        $result=mysqli_query($link,$sql);
        
        while ($row =mysqli_fetch_array($result))
        {
            echo "<h4 style='font-family:serif;font-size:20px;margin-bottom:80px;'>For detailed Placement Report &nbsp<a href=".$row['placement']." target='blank' >Click here</a></h4></p></td>";
        }
        
      ?>
