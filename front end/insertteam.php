<?php
$conn=mysqli_connect("localhost","root","","cricket_website");
$tid=$_POST['tid'];
$country=$_POST['country'];
$q="INSERT INTO teams(team_id,country) VALUES ('$tid','$country')";
mysqli_query($conn,$q);
?>
<html>
<a href="admindash.php"><h1>Click here to return to dashboard</h1></a>
</html>