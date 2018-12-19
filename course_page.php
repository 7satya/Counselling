
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>course_page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="clg.css" type="text/css">

     <link rel="stylesheet" href="footer.css" type="text/css">
	


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body>
	

	
	<!--header start-->
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
				<li class="active"><a href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a></li>
				<li><a href="allcourse.php"><b>All discipline</b></a></li>
    
				<li><a href="college.php"><b>All Colleges</b></a></li>
                                <li><a href="checkl.php"><strong>Community</strong></a></li>
			  </ul>
			 
			</div>
		  </div>
		</nav>
	</header>
	<!--header end-->	


	<div class="jumbotorn" style="margin-top:-18px; background:url(images/bg3.jpg)center; height:400px;">
		<div class="container-fluid" style="opacity: 0.75; background-color:#7B86CA; height:100px; marginp-top:;">
		<div class="block" style=" padding:20px;">
	<p style="font-weight:600;font-family:Arial, Helvetica, sans-serif;font-size:40px;color:;text-align:center;">

<?php
         $cou_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
       
        $sql="select course_name
              from course
              where course_id ='$cou_id';";

         $result=mysqli_query($link,$sql);

         while ($row =mysqli_fetch_array($result))
        {
           echo $row['course_name'];
}
?>


</p>
</div>
</div>
</div>


<div class="col-sm-12" style="background-color:#ECE1B3;height:10px;">
</div><!-- for broad coloured line-->

<div class="container" style="padding:140px;margin-top:-120px">

	<div class="about"><br>
	<h3 style="line-height:0px;color:red;font-family:Markazi Text, serif;font-size:23px;"><?php include 'cou_name.php';?></h3>
<hr style="border-style: inset;
    border-width: 1px; color:red;">
	<h1 style='font-family:Markazi Text, serif;font-size:23px;'><?php include 'what.php' ;
?></h1>
    </div>	
	
	
	<br>
	<div class="specializations">
	<h3 style="line-height:0px;color:red;font-family:Markazi Text, serif;font-size:23px;">ELIGIBILITY
<hr style="border-style: inset;
    border-width: 1px;"></h3>
    <?php include 'eligb.php'; ?>
    </div>	
	
	<div class="careers">
	<h3 style="line-height:0px;color:red;font-family:Markazi Text, serif;font-size:23px;">The MINDSET REQUIRED
<hr style="border-style: inset;
    border-width: 1px; "></h3>
<?php include 'suit.php'; ?>
    </div>	
	
	<div class="recruiters">
	<h3 style="line-height:0px;color:red;font-family:Markazi Text, serif;font-size:23px;">WHERE CAN YOU WORK ATER YOUR GRADUATION?
<hr style="border-style: inset;
    border-width: 1px; "></h3>
   <?php include 'emparea.php';?>
    </div>



<div class="jobs">
	<h3 style="line-height:0px;color:red;font-family:Markazi Text, serif;font-size:23px;">The JOB TYPES
<hr style="border-style: inset;
    border-width: 1px; "></h3>
   <?php include 'jb.php';?>
    </div>
	
</div>	


<!--start of the footer-->
 <footer class='site-footer'>
 <div class='container'>
 <div class='row'>
 <div class='col-md-5'>
 <h4>Corporate Office</h4>
 <address>PDPM IIITDM Jabalpur 482005.
 </address>
 </div>
</div>
   <div class='bottom-footer'>
     <div class='col-md-5'>© copyright yettodecide 2018.</div>
     <div class='col-md-7'>
         <ul class='footer-nav'>
		     <li> <a href='index.php'>HOME</a></li>
			 <li> <a href='#'>Contact</a></li>
			 <li> <a href='#'>Extra</a></li>
	         <li> <a href='#'>Q&A</a></li>
		  
		  </ul>
		 </div> 
       </div> 
      </div>
 </footer>
 <!--end of the footer-->

	</body>	
</html>


