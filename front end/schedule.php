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

table{
    table-layout:fixed;
	width: 100%;    
}
th {
    table-layout:fixed;
	width: 100%;    
    background-color: #38edc0;
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
	$sql = "SELECT * FROM schedule; 
   ";

$res_schedule = mysqli_query($conn, $sql);

?>
<h1>SCHEDULE</h1>
<table style="width:100%">
<tr>
	<th>Date</th>
	<th>Team1</th>
	<th>Team2</th>
	<th>Time</th>
	<th>Venue</th>
	<th>Format</th>
</tr>
<?php
while($row_schedule = mysqli_fetch_array($res_schedule))
	{ 	
			 echo '<tr>';
        echo "<td><center>";
        echo $row_schedule['date'];
        echo "</center></td>";
		
        
        echo "<td><center>";
        echo $row_schedule['team1'];
        echo "</center></td>";
        
		
		
        echo "<td><center>";
            echo $row_schedule['team2'];
        echo "</center></td>";
        
		
		
        echo "<td><center>";
            echo $row_schedule['start_time'];
        echo "</center></td>";
        
		
		
        echo "<td><center>";
            echo $row_schedule['venue'];
        echo "</center></td>";
        
		
		
        echo "<td><center>";
            echo $row_schedule['format'];
        echo "</center></td>";
        
		
      
    echo '</tr>';
	}
?>
</table>




</body>
</html>