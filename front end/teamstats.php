<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/png" href="../images/logo.png">
<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<!--fonts below-->
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

	<h1>Team Statistics</h1>
	<style>
	table, th,td  {
		table-layout:fixed;
		width: 100%;    
		background-color: #f1f1c1;
	}th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		padding: 15px;
		text-align: center;
	}

	</style>
	<?php
	include 'navbar.php';
	$conn = mysqli_connect("localhost:3308", "root", "", "cricket_website");
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM teams";
	$res_teams = $conn -> query($sql);
	?>
	<table style="width:100%">
	  <tr>
		<th>Team ID</th>
		<th>Country</th> 
		<th>Matches Played</th>
		<th>Matches Won</th>
		<th>Matches Lost(Derived)</th>
	 </tr>
	 <?php
	while($row_teams = mysqli_fetch_array($res_teams))
	{
		echo '<tr>';
			echo "<td><center>";
				echo $row_teams['team_id'];
			echo "</center></td>";
			echo "<td><center>";
			   
			   echo $row_teams['country'];
	 
			echo "</td><center>";
			echo "<td><center>";
			   
					echo $row_teams['matches_played'];
				
			echo "</td><center>";
			echo "<td><center>";
				
				echo $row_teams['won'];
			
			echo "</td><center>";
			echo "<td><center>";
				
				echo $row_teams['matches_played']-$row_teams['won'];
			
			echo "</td><center>";
		echo '</tr>';
	}

?>
	  
	  



</html>