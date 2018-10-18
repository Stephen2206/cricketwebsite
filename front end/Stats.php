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
include 'navbar.php';
$conn = mysqli_connect("localhost", "root", "", "cricket_website");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

 
$sql = "SELECT * FROM players";
$res_players = $conn -> query($sql);


//$sql_player="SELECT * FROM `players`"
//$res_player = mysqli_query($connect, $sql_player);
//  $res_players = mysqli->query("SELECT * FROM `players`");
?>

<table style="width:100%">
  <tr>
    <th>PLAYER NAME</th>
    <th>RUNS</th> 
    <th>Debut</th>
	<th>Wickets</th>
	<th>DOB</th>
  </tr>
  <tr>
  
  
<?php
while($row_player = mysqli_fetch_array($res_players))
{
    echo '<tr>';
        echo "<td><center>";
            echo $row_player['player_name'];
        echo "</center></td>";
        echo "<td><center>";
           
		   echo $row_player['runs'];
 
		echo "</td><center>";
        echo "<td><center>";
           
                echo $row_player['debut'];
            
        echo "</td><center>";
        echo "<td><center>";
            
			echo $row_player['wickets'];
        
		echo "</td><center>";
		echo "<td><center>";
            
			echo $row_player['dob'];
        
		echo "</td><center>";
    echo '</tr>';
}

?>

</body>
</html>