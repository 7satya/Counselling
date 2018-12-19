<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>College</title>
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
				<li><a href="#"><b>All discipline</b></a></li>
    
				<li><a href="college.php"><b>All Colleges</b></a></li>
                                <li><a href="checkl.php"><strong>Community</strong></a></li>
			  </ul>
			 
			</div>
		  </div>
		</nav>
	</header>
<body>

<div  style="background-image: url(images/bgl.jpg);height:500px;padding-top:150px;margin-bottom:50px;margin-top:-20px;">
	<div class="container-fluid" style="padding:0px;
	  margin-bottom:265px;margin-left:100px;margin-right:100px;">
<?php
  $col_id = $_GET['var'];
echo "	
<div id='photo'>
<img src='images/$col_id.jpg' alt='photo' width='100' height='100' style='margin-top:2%; margin-left:10px;'>
</div>";
?>
<div class="container" style="text-align:center; margin-top: -7em; margin-bottom:2.4em; ">
	<h2 style="font-family:Arial, Helvetica, sans-serif;font-weight:500;color:white">
        <?php include 'college_name.php';
        ?>
    </h2>
<p style="font-family:Arial, Helvetica, sans-serif;color:white">
    <?php include 'contact.php';?>
    
    </p>
</div>
</div>
</div>
<div style="margin-left:180px;margin-bottom:50px">
<ul class="nav nav-pills">
  <li role="presentation" style="width:18%;border-style:groove"><a style='color:inherit' href="#rank"><center><b>Ranking</b></center></a></li>
  <li role="presentation" style="width:18%;border-style:groove"><a href="#course"style='color:inherit'><center><b>Course</b></center></a></li>
  <li role="presentation" style="width:18%;border-style:groove"><a href="#fee"style='color:inherit'><center><b>Fees</b></center></a></li>
<li role="presentation" style="width:18%;border-style:groove"><a href="#facility" style='color:inherit'><center><b>Placements</b></center></a></li>
<li role="presentation" style="width:18%;border-style:groove"><a href="#placements"style='color:inherit'><center><b>Contact</b></center></a></li>
</ul>
</div>


	 	  
	  <!--ranking-->
	  <div class="container"  style="margin-top:-185px;padding:155px;">
	  <div class="row" >
<div class="col-sm-15">	  
   <h3><a name="rank"></a>ABOUT</h3><hr style="border-style: inset;
    border-width:1px;margin-top:-5px;">
        <?php include 'about.php';
        ?>
  </div>
    <div class="col-sm-15">	  
   <h3><a name="rank"></a>RANKING</h3><hr style="border-style: inset;
    border-width:1px;margin-top:-5px;">
        <?php include 'ranking.php';
        ?>
  </div>
		
	<div class="col-sm-15">
	<h3><a name="course"></a>COURSE</h3><hr style="border-style: inset;
    border-width:1px;margin-top:-5px;">
   <?php include 'pass.php';
        ?>
    </div>	
	
	
	<div class="col-sm-15">
	<h3><a name="fee"></a>Fees</h3><hr style="border-style: inset;
    border-width:1px;margin-top:-5px;">
       <?php
         
   

         $col_id = $_GET['var'];
        $link=mysqli_connect('localhost','root','','counselling') or die ('Unable to connect to the server');
        
        $sql="select fee,feelink
              from college
              where college_id ='$col_id';";
        
        $result=mysqli_query($link,$sql);
        
        while ($row =mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><p style='font-family:Markazi Text, serif;font-size:21px;font-weight:lighter;'>Total Fees</p>
     <h2 style='font-family:Markazi Text, serif;font-size:23px;margin-bottom:10px;font-weight:600;margin-top:-10px;'>INR&nbsp" . $row['fee'] . "&nbspLakh</h2>
   <p style='font-family:Markazi Text, serif;font-size:21px;margin-bottom:50px;font-weight:lighter;'>(Fee Components:Tuition,Examination Fee,Registration Fee,Gymkhana Fee,Medical Fee,Student Benevolent Fund,Annual Insurance Premium)<h4 style='font-family:serif;font-size:20px;margin-bottom:80px;'>For detailed Fee structure <a href=".$row['feelink']." target='blank' >Click here</a></h4></p></td>";
            echo "</tr>";
        }







?>
    </div>	
	
	
	
	<div class="col-sm-15">
	<h3><a name="facility"></a>Infrastructure/Facilities</h3><hr style="border-style: inset;
    border-width:1px;margin-top:-5px;">
 <?php include 'ifra.php';
        ?>
    </div>	
	
	
	<div class="col-sm-15">
	<h3><a name="placements"></a>PLACEMENTS<hr style="border-style: inset;
    border-width:1px;margin-top:9px;"></h3>
         <?php include 'placement.php';
        ?>
    </div>	
	
	
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
