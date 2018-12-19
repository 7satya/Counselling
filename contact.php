<?php
         $col_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
        
        $sql="select address
              from college
              where college_id ='$col_id';";
        
        $result=mysqli_query($link,$sql);
        
        while ($row =mysqli_fetch_array($result))
        {
            echo "<h2 style='font-family:Markazi Text, serif;font-size:23px;margin-bottom:80px;color:white;'> " . $row['address'] . "</h2>";
        }
        
      ?>
