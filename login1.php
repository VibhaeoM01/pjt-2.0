<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
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
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>


	<div class="wrap" style="    height: 136px;
    width: 100%;">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo1.png"/>
			</div>		
			<div>
			<div id="heading">
				<a href="index.html" style="color:orangered">Indian Railways</a>
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
				</div>
			</div>
		</div>
		<body style="background-image: url('images/bg11.jpg'); background-size: cover;">	
			
		
		<!-- Login and signup -->
		<div align="center">
		
		<?php
			if(isset($_SESSION['error']))
			{
			 if(isset($_SESSION['name']))
			 {
				//echo "nikul";
			 }
			 else if($_SESSION['error']==15)
			 {
				//echo "hilgr";
		?>
				<div class="alert alert-error"><font size="5"> Please Login First..</font> 
				</div>
		<?php	 }
			}
			//else{ echo "hi";}
		?>
			<br />
			<br />
		
			<form class="form-signin " method="post" action="login.php">
		
			<table class="table" style="margin-bottom:4px;    margin-bottom: 4px;
    width: 500px;
    /* border: 1px solid black; */
    background: #0000004f;
    border-radius: 10px;">
			
			<tr>
			<td style="border-top:0px; color:white;"><label> Username</label></td>
			<td style="border-top:0px;"> <input type="text" name="user" class="input-block-level" placeholder="Username"></td>
			</tr>
			<tr >
			<td style="border-top:0px;  color:white;"> <label>Password</label></td>
			<td style="border-top:0px;"><input type="password" name="psd" class="input-block-level" placeholder="password"></td>
			</tr>
			<tr>
			<td colspan=2 style="border-top:0px; visibility:hidden;" id="wrong"  class="label label-important">Username and Password Wrong !!!</td>
			</tr>
			<tr>
			<td style="border-top:0px;"></td>
			<td style="border-top:0px;"><input class="btn btn-info" type="submit" value="Login" style="margin-top: -52px;"></td>
			</tr>
			<tr>
			<td colspan="2" style="border-top:0px;  color:white;"> <p>  You haven't registered?</p></td>
			</tr>
			<tr>
			<td style="border-top:0px;"></td>
			<td style="border-top:0px;"> <a class="btn btn-info" href="signup.php?value=0"  style="margin-top:-85px;">Signup</a></td>
			</tr>
			
			</table>
			</form>
		
		</div>
		<br/>
		<!-- Footer -->
	
	
</body>
</html>
<?php
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}

?>	