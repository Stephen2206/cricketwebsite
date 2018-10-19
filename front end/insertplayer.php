<?php
$conn = mysqli_connect("localhost", "root", "", "cricket_website");
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}

	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$teamid=$_POST['tid'];
	$runs=$_POST['runs'];
	$debut=$_POST['debut'];
	$wickets=$_POST['wickets'];
	$dob=$_POST['dob'];
	echo $pname." Added" ;
	
	$q="SELECT * from teams WHERE team_id='$teamid'";
	$tid=mysqli_query($conn,$q);
	$row=mysqli_fetch_array($tid);
	$count=$row['country'];
	echo "".$count;
	
	$query="INSERT INTO `players` (`player_id`, `fk_team_id`, `player_name`, `runs`, `debut`, `wickets`, `dob`,`country`) VALUES 
	('$pid','$teamid', '$pname', '$runs', '$debut', '$wickets', '$dob','$count')";
	mysqli_query($conn,$query);
?>
<html>
<title>Insertion Success</title>
<a href="admindash.php"><h1>Click here to reurn to dashboard</h1></a>
</html>