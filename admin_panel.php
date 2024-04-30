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
	
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container1 {
            width: 46%;
            margin: 50px auto;
            background-color: #ffffff82;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;`
        }
        
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        
        .admin-options {
            margin-top: 30px;
        }
        
        .admin-options h2 {
            color: #666;
            margin-bottom: 20px;
        }
        
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color:orange;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .button:hover {
            background-color: red;
        }
    </style>

</head>

<body style="background-image: url('images/admin.jpg'); background-size: cover;">	
	<div class="wrap">
		<!-- Header -->
		<div class="header">
		<div style="float:left;width:150px;">
		<img src="images/logo1.png" style="height: 94px;"/>
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
				<a href="login1.php" class="btn btn-info" style="    margin-left: 235px;">Login</a>";
				<a href="register.php" class="btn btn-info" >Register</a>";
				</div>
			</div>
		</div>
	
		
		


     <!-- Link to your CSS file -->
  

    <div class="container1">
        <h1>Admin Panel</h1>
        <div class="admin-options">
            <h2>Welcome Admin</h2>
            <!-- Link/button to show all tickets for updating -->
            <a href="show_all_tickets.php" class="button">Show All Tickets</a>
        </div>
    </div>
</body>
</html>



