<html>
<head> 
 <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
</head>
<?php
         $col_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
        
        $sql="select infrastructure
              from college
              where college_id ='$col_id';";
        
        $result=mysqli_query($link,$sql);
        
        while ($row =mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><h2 style='font-family:Markazi Text, serif;font-size:23px;margin-bottom:80px;'>" . $row['infrastructure'] . "</h2></td>";
            echo "</tr>";
        }
        
      ?>

</html>
