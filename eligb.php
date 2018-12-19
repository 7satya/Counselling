<?php
         $col_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
        
        $sql="select link
              from course
              where course_id ='$col_id';";
        
        $result=mysqli_query($link,$sql);
        $row =mysqli_fetch_array($result);
       $pass=$row['link'];
       $ret=exec("/home/sumit/anaconda3/bin/python3 /var/www/html/couns/eligb.py $pass  2>&1");
        echo $ret;
      ?>

