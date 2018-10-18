<html>
<head>
<title>HoWZATT!!-Home Of Cricket</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/png" href="../images/logo.png">
<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<!--fonts below-->
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
<link rel="stylesheet" href="Layout.css">
</head>
<body>
<div id="left-banner">
H<br>O<br>Z<br>A<br>T<br>T
</div>
<div id="right-banner">
H<br>O<br>M<br>E<br><br>O<br>F<br><br>C<br>R<br>I<br>C<br>K<br>E<br>T
</div>
<div class="container" id="main-body">

<div id="cover-page">
<img src="../images/teams/rcb.jpg" id="cover-image">
</div>
<?php
include './navbar.php';
?>



<?php

$conn = mysqli_connect("localhost", "root", "", "cricket_website");
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM teams
   ORDER BY won desc; 
   ";

$res_teams = mysqli_query($conn, $sql);
$count=1;
?>
<table style="width:100%">
<tr>
	<th>Rank</th>
	<th>Country</th>
	<th>No of wins</th>
	

</tr>
<?php

while($row_teams = mysqli_fetch_array($res_teams))
	{ 	
			 echo '<tr>';
        echo "<td><center>";
            echo "$count";
        echo "</center></td>";
        echo "<td><center>";
           
		   echo $row_teams['country'];
 
		echo "</center></td>";
        echo "<td><center>";
           
                echo $row_teams['won'];
            
        echo "</center></td>";
      
    echo '</tr>';
	$count++;
	}
?>
</table>
<table style="width:100%">
<tr>
	<th>Rank</th>
	<th>Player name</th>
	<th>No of runs</th>
	

</tr>

<?php
$sql = "SELECT * FROM players
   ORDER BY Runs desc; 
   ";

$res_teams = mysqli_query($conn, $sql);
$count=1;
while($row_teams = mysqli_fetch_array($res_teams))
	{ 	
			 echo '<tr>';
        echo "<td><center>";
            echo "$count";
        echo "</center></td>";
        echo "<td><center>";
           
		   echo $row_teams['player_name'];
 
		echo "</center></td>";
        echo "<td><center>";
           
                echo $row_teams['runs'];
            
        echo "</center></td>";
      
    echo '</tr>';
	$count++;
	}
?>
</div>
</table>



</body>
</html>