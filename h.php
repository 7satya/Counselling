<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yet To Decide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
			  <a class="navbar-brand" href="#">Yet To Decide</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				  <form class="navbar-form navbar-right" action="index2.php" method="post">
				<div class="form-group">
				  <input type="text" value="search colleges" name="college" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
				</div>
				<input type="submit" name="search" value="Search" >
			  </form>
				<li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="#">All discipline</a></li>
				<li><a href="index.php">All Colleges</a></li>
			  </ul>
			 
			</div>
		  </div>
		</nav>
	</header>
<body>
    <?php
    echo"<center><h1>College Names</h1>";
$link=mysqli_connect("localhost","root","","counselling") or die ("Unable to connect to the server");
    
   // mysql_select_db("councelling")or die("Unable to connect");

$sql="select *
from college;";

$result=mysqli_query($link,$sql);
if($result==FALSE)
{
    echo"query error";
}
    
    echo "<div class=row'>";
        
    while ($row=mysqli_fetch_array($result))
    {
        $key1=$row['college_id'];
	$img=$row['college_image'];
	echo "<div class='col-sm-12'>";
       echo"<div class='panel panel-info'>";
      echo"<div class='panel-heading'><a href='#'>".$row['college_name']."</a></div>";
     echo"<div class='panel-body'>".$row['description']."</br></br></div>
    </div>
    </div>" ;
} 
echo"</div>";

?>

