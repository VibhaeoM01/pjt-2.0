<?php  
session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
	
require('firstimport.php');
$tbl_name="interlist";
mysqli_select_db($conn,"$db_name") or die("cannot select db");
$tostn = '';
$fromstn = '';
$doj = '';
if(isset($_POST['from']) && isset($_POST['to']))
{	$k=1;
	$tostn = $_POST['to'];
	$fromstn = $_POST['from'];
	$doj = $_POST['date'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$quota=$_POST['quota'];
	$from=strtoupper($from);
	$tostn=strtoupper($tostn);
	$fromstn=strtoupper($fromstn);
	$to=strtoupper($to);
	$day=date("D",strtotime("".$doj));
	//echo $day."</br>";

	
	$sql="SELECT * FROM $tbl_name WHERE (Ori='$from' or st1='$from' or st2='$from' or st3='$from' or st4='$from' or st5='$from') and (st1='$to' or st2='$to' or st3='$to' or st4='$to' or st5='$to' or Dest='$to') and ($day='Y')";
	$result=mysqli_query($conn,$sql);
}
else if((!isset($_POST['from'])) && (!isset($_POST['to'])))
{	$k=0;
	$from="";
	$to="";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Reservation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet"></link>
	<link href="css/Default.css" rel="stylesheet"></link>
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
				echo "Welcome, ".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
				$_SESSION['error']=15;
				header("location:login1.php")
			 ?>  
				<a href="login.html" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php" class="btn btn-info">Signup</a>
			<?php   } ?>
			
			</div>
			<div id="heading">
			<a href="index.php">Railway Connect</a>
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
		
		
		
			<!-- find train with qouta-->
			<!-- <div class="span4 well">
			<form method="post" action="reservation.php">
			<table class="table">
				<tr>
					<th style="border-top:0px;"><label> From <label></th>
					<td style="border-top:0px;"><input type="text" class="input-block-level" name="from" id="fr" ></td>
				</tr>
				<tr>
					<th style="border-top:0px;"><label> To <label></th>
					<td style="border-top:0px;"><input type="text" class="input-block-level" name="to" id="to1" ></td>
				</tr>
				<tr>
					<th style="border-top:0px;" ><label > Quota <label></th>
					<td style="border-top:0px;"><input list="q1" class="input-block-level" name="quota" id="q12" value="<?php if(isset($_POST['quota']))echo $_POST['quota'];?>">
					<datalist id="q1" >
					<option value="General">General</option>
					<option value="Tatkal">Tatkal</option>
					<option value="Ladies">Ladies</option>
					</datalist>
					</td>
				</tr>
				<tr>
					<th style="border-top:0px;"><label> Date<label></th>
					<td style="border-top:0px;"><input type="date" class="input-block-level input-medium" name="date" max="<?php echo date('Y-m-d',time()+60*60*24*90);?>" min="<?php echo date('Y-m-d')?>" value="<?php if(isset($_POST['date'])){echo $_POST['date'];}else {echo date('Y-m-d');}?>"> </td>
				</tr>
				<tr>
					<td style="border-top:0px;"><input class="btn btn-info" type="submit" value="OK"></td>
					<td style="border-top:0px;"><a href="reservation.php" class="btn btn-info" type="reset" value="Reset">Reset</a></td>
				</tr>
			</table>
			</form>

			
			</div> -->
			
    
 
</div>
<div class="final well">
				<table>
					<tr>
						<td>
						<div class="span4 ">
    <form method="post" action="reservation.php">
        <table class="table">
            <tr>
                <th style="border-top:0px;"><label>From</label></th>
                <td style="border-top:0px;"><input type="text" class="input-block-level" name="from" id="fr"></td>
                <th style="border-top:0px;"><label>To</label></th>
                <td style="border-top:0px;"><input type="text" class="input-block-level" name="to" id="to1"></td>
            </tr>
            <tr>
                <th style="border-top:0px;"><label>Quota</label></th>
                <td style="border-top:0px;" colspan="3">
                    <input list="q1" class="input-block-level" name="quota" id="q12" value="<?php if(isset($_POST['quota']))echo $_POST['quota'];?>">
                    <datalist id="q1">
                        <option value="General">General</option>
                        <option value="Tatkal">Tatkal</option>
                        <option value="Ladies">Ladies</option>
                    </datalist>
                </td>
            </tr>
            <tr>
                <th style="border-top:0px;"><label>Date</label></th>
                <td style="border-top:0px;" colspan="3">
                    <input type="date" class="input-block-level input-medium" name="date" max="<?php echo date('Y-m-d',time()+60*60*24*90);?>" min="<?php echo date('Y-m-d')?>" value="<?php if(isset($_POST['date'])){echo $_POST['date'];}else {echo date('Y-m-d');}?>">
                </td>
            </tr>
            <tr>
                <td style="border-top:0px;"><input class="btn btn-info" type="submit" value="OK"></td>
                <td style="border-top:0px;" colspan="3"><a href="reservation.php" class="btn btn-info" type="reset" value="Reset">Reset</a></td>
            </tr>
        </table>
    </form>
</div>

						</td> 
						<td style="margin-left:10px;">
						<div class="span8 ">
				<div class="display" style="height:30px;     color: white;">
				<table class="table">
				<tr>
					<th style="width:80px;border-top:0px;"> Train No.</th>
					<th style="width:270px;border-top:0px;"> Train Name </th>
					<th style="width:65px;border-top:0px;"> Orig. </th>
					<th style="width:55px;border-top:0px;"> Des. </th>
					<th style="width:70px;border-top:0px;"> Arr. </th>
					<th style="width:80px;border-top:0px;"> Dep. </th>
					<th style="width:150px;border-top:0px;"></th>
				</tr>
				</table>
				</div>
				<div class="display" style="margin-top:0px;overflow:auto;color: white;">
				<table class="table">
				
				<?php  
					
					if($k==1)
					{
						
						echo "<script> document.getElementById(\"fr\").value=\"$from\";
									   document.getElementById(\"to1\").value=\"$to\";
									   
							</script>";
						$n=0;
						while($row=mysqli_fetch_array($result)){
					//$q="from: ".$from;
						if($from==$row['st1'])
						{	$q=$row['st1arri'];
							//echo $q;
						}
						else
						if($from==$row['st2'])
						{	$q=$row['st2arri']; }
						else if($from==$row['st3'])
						{	$q=$row['st3arri']; }
						else if($from==$row['st4'])
						{	$q=$row['st4arri']; }
						else if($from==$row['st5'])
						{	$q=$row['st5arri']; }
						else if($from==$row['Ori'])
						{	$q=$row['Oriarri']; }
						else if($from==$row['Dest'])
						{	$q=$row['Destarri'];}
						
						$p1=substr($q,0,2);
						$p2=substr($q,3,2);
						$p2=$p2+5;
						if($p2<10)
						{$p2="0".$p2;}
						$d=$p1.":".$p2;
					if($n%2==0)
					{
				
				?>
				<tr class="text-error" style="color: white;">
					<td style="width:70px;"> <?php   echo $row['Number']; ?> </td>
					<td style="width:250px;"> <?php echo $row['Name']; ?> </a></td>
					<td style="width:65px;"> <?php echo $row['Ori']; ?> </td>
					<td style="width:55px;"> <?php echo $row['Dest']; ?> </td>
					<td style="width:60px;"> <?php   echo $q; ?> </td>
					<td style="width:65px;"> <?php   echo $d; ?> </td>
					
					<td style="width:200px;">  
    <select class="text-error" onchange="window.location.href=this.value;">
        <option value="">Select Class</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "1A";?>">1A</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "2A";?>">2A</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "3A";?>">3A</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "SL";?>">SL</option>
    </select>
</td>
					</tr>
				<?php  
					}
					else
					{
				?>
				<tr class="text-info" style="color: white;">
					<td style="width:70px;"> <?php  echo $row['Number']; ?> </td>
					<td style="width:210px;"><?php  echo $row['Name']; ?> </a> </td>
					<td style="width:65px;"> <?php  echo $row['Ori']; ?> </td>
					<td style="width:55px;"> <?php  echo $row['Dest']; ?> </td>
					<td style="width:60px;"> <?php  echo $q; ?> </td>
					<td style="width:65px;"> <?php  echo $d; ?> </td>
					<td style="width:200px;">  
    <select class="text-error" onchange="window.location.href=this.value;">
        <option value="">Select Class</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "1A";?>">1A</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "2A";?>">2A</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "3A";?>">3A</option>
        <option value="reser.php?tno=<?php echo $row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&quota=<?php echo $quota;?>&class=<?php echo "SL";?>">SL</option>
    </select>
</td>	
				</tr>
				<?php  
					}
					$n++;
					}
				}
				else
				{
					echo "<div class=\"alert alert-error\"  style=\"margin:100px 180px;\"> please search the train.. </div>";
				}
					
					mysqli_close($conn);
				?> 
				</table>
				</div>
			</div>
						</td>
					</tr>
				</table>


			
	 	
		 <!-- display train -->
			
		 </div>
	</div>
</body>
</html>