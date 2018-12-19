<?php
        error_reporting(0);
        $col_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
        
        $sql="select college_name
              from college
              where college_id ='$col_id';";
        
        $result=mysqli_query($link,$sql);
        
        while ($row =mysqli_fetch_array($result))
        {
            echo $row['college_name'];
        }
        
        ?>
