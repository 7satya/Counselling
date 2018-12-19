<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Yet To Decide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="footer.css" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
	
    <header>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Yet To Decide</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a></li>
				<li><a href="#"><b>Unanswered</b></a></li>
<form class="navbar-form navbar-right" action="discusssearch.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="college"placeholder="Search Questions">
				</div>
				<button type="submit" name="search" value="Search" class="btn btn-default">Submit</button>
			  </form>
<li><?php
                                     session_start();
                                    $link = mysqli_connect('localhost', 'root', '','counselling');
                                     if($_SESSION['IS_AUTHENTICATED']){
                                     $hello =$_SESSION['email'];
                                         $sql="SELECT name FROM users WHERE email ='$hello'";
                                         $result=mysqli_query($link,$sql);
                                            // Mysql_num_row is counting table row
                                        $row=mysqli_fetch_array($result);
                                         $name=$row['name'];
                                         

                                echo "<div class='dropdown' style='margin-top:7px'>
  <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
    $name
    <span class='caret'></span>
  </button>
  <ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>
    <li><a href='profile.php'>My profile</a></li>
    <li><a href='#'>setting</a></li>
    <li><a href='loggout.php'>Log out</a></li>
  </ul>
</div>";
                                     }
                                    ?> </li>
 <!-- Trigger the modal with a button -->
  <button type="button" style="margin-top:7px;margin-left:10px;" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Ask Question</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Ask Question</h2>
          <ul>
                <li>Keep your question short and to the point</li>
                <li>Check for grammar or spelling errors</li>
                <li>Phrase it like a question</li>
          </ul>
        </div>
        <div class="modal-body">
         <form action="postques.php" method="post"> <div class="form-group">
    <label for="exampleFormControlTextarea1">Write your question below:-</label>
    <textarea name="ques" class="form-control" id="exampleFormControlTextarea1" rows="3"> </textarea>
  </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
     </form>
			  </ul>
			 
			</div>
		  </div>
		</nav>
	</header>
<body style="font-family:Times New Roman;">
<center><img class="img-responsive" src="https://thecrowdedhouse.net.au/wp-content/uploads/2018/01/help-and-support.png"  style="margin-top:-30px;" alt="Chania">
<div class="jumbotron" style="margin-top:-19px;">
              <center>  <h2><b>Welcome to Discussion...</b></h2><br>
                <p class="lead"><strong>Be The First One To Answer These Questions</strong></p>
			   </center>
            </div>
     </div>

<h3>All Unanswered:</h3>

<?php
   
$link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
    
   // mysql_select_db("councelling")or die("Unable to connect");
//$sumit =$_SESSION['email'];
              
$sql="select question.*,users.name
from question,users
where question.email =users.email
AND ques_id NOT IN (
     SELECT ques_id FROM answer);";

$result=mysqli_query($link,$sql);
if($result==FALSE)
{
    echo"query error";
}
    
    if(mysqli_num_rows($result)>0)
    {   
        
        echo "<table class='table table-striped'> 
	<tr><th>Question</th>
	
	<th>User</th>
	</tr>"; 

        
    while ($row=mysqli_fetch_array($result))
    {
        $key1=$row['ques_id'];
	echo "<tr>";
	echo "<td><strong><h4><a style='color:inherit;font-family:Times New Roman;' href = 'answerpage.php?var=$key1'>" . $row['question'] . "</a></h4></strong></td>";

	echo "<td>" . $row['name'] . "</td>";
	echo "</tr>";  
} 
echo "</table></center>"; 
    }


?>

</table>

  
  
</body>
</html>

