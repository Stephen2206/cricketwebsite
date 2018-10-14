<html>
<head>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
	margin: 0;
	padding: 0;
	border: 0;
	background:linear-gradient( 90deg, #00f2dc, #00c7ff);
}
#section1{
font-family: Courier, Arial, Serif;
color: #0097c1;
background-color: white;
height: 70%;
margin-top: 11.5%;		
border-radius: 10px;
width: 50%;
}

input[type=text], input[type=password], input[type=date],input[type=int]{
border: none;
outline: none;
color: #0097c1;
width: 100%;
background-color: white;
}

#submitbtn{
border: 1px solid #0097c1;
border-radius: 6px;
color: #0097c1;
font-weight: bold;
font-size: 1.5em;
background: none;
margin-top: 40px;
}

#logoutbtn{
border: 1px solid #0097c1;
border-radius: 6px;
color: #0097c1;
font-weight: bold;
font-size: 1.5em;
background: none;
margin-top: 10px;
margin-right: 20px;
}
@media only screen and (max-width: 767px){
	#section1{
		margin-top: 30%;
	}	
}
</style>

</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "cricket_website");
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}
?>
<div class="container" id="section1">
<form action="insertschedule.php" method="post" >
<center><h2 style="margin-top:20px;">Add Schedule</h2></center>

<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;;">Date</div>
<div class="col-md-6">
<input type="date" name="date" style="border-bottom: 3px solid #0097c1;" required>
</div>
</div>

<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;;">Time</div>
<div class="col-md-6">
<input type="time" name="time" style="border-bottom: 3px solid #0097c1;" required>
</div>
</div>

<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;;">Venue</div>
<div class="col-md-6">
<input type="text" name="venue" style="border-bottom: 3px solid #0097c1;" required>
</div>
</div>

<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;">Team1:</div>
<div class="col-md-6">
<select name="t1">
	<?php
	$q="SELECT * from teams";
	$tid=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($tid))
	{	
	?>
	<option>
	<?php
	echo $row["country"];
	?>
	</option>
	<?php 
	}
	?>

</select>
</div>
</div>


<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;">Team2:</div>
<div class="col-md-6">
<select name="t2">
	<?php
	$q="SELECT * from teams";
	$tid=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($tid))
	{	
	?>
	<option>
	<?php
	echo $row["country"];
	?>
	</option>
	<?php 
	}
	?>

</select>
</div>
</div>


<! Text_Fields>




<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;">Format:</div>
<div class="col-md-6">
<input type="text" name="format" style="border-bottom: 3px solid #0097c1;" required>
</div>
</div>


<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 text-center"><input type="submit" name="sub" id="submitbtn" value="Add"></div>
<div class="col-md-4"></div>
</div>

</form>

</div>
</body>
</html>
