<?php
$conn = mysqli_connect("localhost", "root", "", "cricket_website");
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}

	$venue=$_POST['venue'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$format=$_POST['format'];
	$query="INSERT INTO `schedule` (`venue`, `date`, `start_time`, `team1`, `team2`, `format`) VALUES 
	('$venue','$date', '$time', '$t1', '$t2', '$format')";
	mysqli_query($conn,$query);
?>
<html>
<title>Insertion Success</title>
<a href="admindash.php"><h1>Click here to return to dashboard</h1></a>
</html>