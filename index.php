<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Welcome to Indian Railways </title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>


	<div class="wrap">
		<!-- Header -->
		<div class="header">
		<div style="float:left;width:150px;">
		<img src="images/logo1.jpg" style="height: 100px;"/>
			</div>		

			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
			
			<?php } ?>
			
			
			</div>
			<div id="heading">
				
				<a href="index.php">Railway Connect</a>
			</div>
			</div>
		</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" style="align-items:cc">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<!-- <a class="brand" href="train.php" >FIND TRAIN</a> -->
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="display.php">BOOKING HISTORY</a>
				<a class="brand" href="admin_login.php">Admin</a>
				<a href="login1.php" class="btn btn-info" style="    margin-left: 235px;">Login</a>
				<a href="register.php" class="btn btn-info" >Register</a>
				</div>
			</div>
		</div>
		<body style="background-image: url('images/bg11.jpg'); background-size: cover;">	
		
		
<!-- 
<<<<<<<<<<<<<<MAIN>>>>>>>>>>>>>>>> -->
			
		<div id="main">
	<div id="logo">

<A HREF="index.php">

</A></div>
<h1 align="center">Welcome to Indian Railways!</h1><br/><br/><br/>
<h2 align="center">Have a safe journey with us</h2>
<br/><br/><br/>
<?php
if(isset($_SESSION['user_info']))
  echo '<h3 align="center"><a href="booktkt.php">Book here</a></h3>';
else
  echo '<h3 align="center"><a href="register.php">Please register/login before booking</a></h3>';
?>
</>
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			
			</div>
		
	
	
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>