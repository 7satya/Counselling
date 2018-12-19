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
			  <a class="navbar-brand" href="index.php">Yet To Decide</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				  <form class="navbar-form navbar-right" action="searchp.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="college"placeholder="Search">
				</div>
				<button type="submit" name="search" value="Search" class="btn btn-default">Submit</button>
			  </form>
				<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="allcourse.php">All discipline</a></li>
				<li><a href="college.php">All Colleges</a></li>
			  </ul>
			 
			</div>
		  </div>
		</nav>
	</header>
<body>
    <?php
    error_reporting(0);
    echo"<center><h1>College Names</h1>";
$link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
    
   // mysql_select_db("councelling")or die("Unable to connect");

$Name= $_POST['college']; 
$s="'%".$Name."%'";
$query = "SELECT college_name,description,address,ranking,college_image,college_id
FROM college
WHERE college_name like $s 
ORDER BY ranking";

//Execute query 
$result = mysqli_query($link,$query); 
$count= mysqli_num_rows($result);
//echo "<center><h1>Search Results</h1>"; 
//echo $count;
if($count==0)
{
	echo 'Sorry!!!!!!!!!! NO college found ';
}
else
{
echo "<table class='table table-striped' width = '700px'> 
    <tr><th></th>
        <th>COLLEGE NAME</th>
	<th>DESCRIPTION</th>
</tr>"; 


 while ($row=mysqli_fetch_array($result))
    {
        $key1=$row['college_id'];
        
        // header("content-type: image/jpg");
	echo "<tr>";
        echo "<td><img src='images/$key1.jpg'>";
	echo "<td width=30%'><a style ='margin-left:0px'; href = \"college_page.php?var=$key1\">" . $row['college_name'] . "</a></td>";
	echo "<td width='50%'>". $row['description'] . "</td>";
    //echo "<td width='17%'>" . $row['address'] . "</td>";
	//echo "<td>" . $row['ranking'] . "</td>";
    //echo "<td>" . $row['college_image'] . "</td>";
	echo "</tr>";  
} 
echo "</table></center>"; 
} 
?>

</body>
	
</html>
