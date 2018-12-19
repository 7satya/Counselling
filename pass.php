<?php
         $col_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
        
        $sql="select link
              from college
              where college_id ='$col_id';";
        
        $result=mysqli_query($link,$sql);
        $row =mysqli_fetch_array($result);
       $pass=$row['link'];
       $ret=shell_exec('C:\Users\bhart\AppData\Local\Programs\Python\Python37-32\python        \C:\wamp64\www\couns\cou.py $pass  2>&1');
        echo $ret;
      ?>

      