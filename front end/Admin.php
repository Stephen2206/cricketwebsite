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
height: 50%;
margin-top: 13.5%;		
border-radius: 10px;
width: 50%;
}

input[type=text], input[type=password]{
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

session_start();
//unset($_SESSION['user']);
$conn = mysqli_connect("localhost", "root", "", "cricket_website");
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}
if(isset($_POST['user']))
{$un = $_POST['user'];
$pw = $_POST['password'];

//$sql="select*from logindetails;";
$stmt=$conn->prepare("select username,password from admin where username=? and password=? LIMIT 1;");
$stmt->bind_param("ss", $un, $pw); //each s stands for one bind variable it can be any other character other than s also
$stmt->execute();
$stmt->bind_result($un, $pw);
$stmt->store_result();

if($stmt->num_rows==1){
	//session_start();
$_SESSION['user']=$un;
header("Location: ./teamstats.php");
//$_SESSION['user']=$un;
//exit();
}

else{
$message = "Invalid username or password";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
//if($result->num_rows>0){
//while($row=$result->fetch_assoc()){
//echo "<br>".$row["sr_no"]." ".$row["user"]." ".$row["name"];

//else{
//echo "0 results";
//}

?>
<div class="container" id="section1">
<form method="post" >
<center><h2 style="margin-top:20px;">Volunteer Login</h2></center>

<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;;">Admin name</div>
<div class="col-md-6">
<input type="text" name="user" style="border-bottom: 3px solid #0097c1;">
</div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;">Admin Password:</div>
<div class="col-md-6">
<input type="password" name="password" style="border-bottom: 3px solid #0097c1;">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 text-center"><input type="submit" name="sub" id="submitbtn" value="Login"></div>
<div class="col-md-4"></div>
</div>

</form>

</div>
</body>
</html>
