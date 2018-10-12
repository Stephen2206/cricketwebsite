<html>
<head>

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
include 'connect.php';
//$conn = mysqli_connect("localhost", "root", "", "cricket_website");
    //if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    //}

 
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