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

<style>
body{
	margin: 0;
	padding: 0;
	border: 0;
	//background:linear-gradient(90deg,#6cf7f2,#00d0f4);
    background: linear-gradient(180deg, #470202, #ba0303);
	//position: fixed;
}

#main-body{
	background-color: white;	
    //position: relative;
    height: 200%;
    width: 75%;
	float: left;
	padding: 0;
	box-shadow: 3px 3px 5px black, -3px 3px 5px black;
}

#left-banner{
	float: left; margin: 0; padding: 0; text-align: center;
	width: 12.5%;
	margin-top: 3em;
	font-size: 3em;
	color: white;
	font-family: 'Bangers', cursive;
	//position: sticky;
}
#right-banner{
    float: right;
	margin: 0; padding: 0; text-align: center;
	width: 12.5%;
	margin-top: 3em;
	font-size: 1.8em;
	color: white;
	font-family: 'Bangers', cursive;
    //position:sticky;
}
#cover-page{
height: 25%;
width: 100%;
padding: 0;
margin: 0;
//background:url('../images/teams/rcb.jpg'); 	
//background-size: 100%, 100%;
//backgorund-repeat: no-repeat;
//box-shadow: 0 3px 3px black;
//display: block;
}

#cover-image{
	width: 100%;
	height: 100%;
    
}



.first-row{
	width: 80%;
	height: 250px;
    margin: auto;
}

.second-row{
	width: 80%;
	height: 400px;
	margin: auto;
}

.wrap{
	width: 60%;
	height: 100%;
	float: left;
}

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



}

</style>
</head>
<body>
<div id="left-banner">
H<br>O<br>Z<br>A<br>T<br>T
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