<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/png" href="../images/logo.png">
<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<!--fonts below-->
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

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
</head>
<body>


Statistics


<?php
include 'navbar.php';
$conn = mysqli_connect("localhost:3308", "root", "", "cricket_website");
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
            echo $row_player['Player name'];
        echo "</center></td>";
        echo "<td><center>";
           
		   echo $row_player['Runs'];
 
		echo "</td><center>";
        echo "<td><center>";
           
                echo $row_player['debut'];
            
        echo "</td><center>";
        echo "<td><center>";
            
			echo $row_player['wickets'];
        
		echo "</td><center>";
		echo "<td><center>";
            
			echo $row_player['Date of birth'];
        
		echo "</td><center>";
    echo '</tr>';
}

?></body>
</html>