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
		<img src="images/logo1.png" style="height: 94px;"/>
			</div>		

			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			if(isset($_SESSION['name'])) {
				echo "Welcome, " . $_SESSION['name'] . "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			} else 
			 {
			 ?>
			
			<?php } ?>
			
			
			</div>
			<div id="heading">
				
				<a href="index.php" style="color:orangered;">Indian Railways</a>
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
				<a class="brand" href="admin_login.html">Admin</a>
				<a href="login1.php" class="btn btn-info" style="    margin-left: 235px;">Login</a>";
				<a href="register.php" class="btn btn-info" >Register</a>";
				</div>
			</div>
		</div>
		<body style="background-image: url('images/bg11.jpg'); background-size: cover;">	
		
    <div class="container">
        <h2>Admin Login</h2>
        <form action="admin_authenticate.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
