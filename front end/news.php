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
	background-color: #f9f9f9;	
    //position: relative;
    //height: 206%;
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
height: 300px;
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

.news{
	height: 100%;
	width: 60%;
	margin-top: 50px;
	//box-shadow: 3px 3px 5px black, -3px 3px 5px black;
    float: left;
	border: 1px solid black;
    background: linear-gradient(180deg, #470202, #ba0303);
	color: white;
}
.live-score{
	float: right;
	width: 30%;
	height: 100%;
    //box-shadow: 3px 3px 5px black, -3px 3px 5px black;
    margin-top: 50px;  
    float: right;
	border: 1px solid black;
}

.first-row{
	width: 80%;
	height: 250px;
    margin-left: auto;
	margin-right: auto;
	//margin-bottom: 140px;
}

.wrap> img{
	height: 100%;
    width: 100%;
    border-right: 1px solid black;	
}

.second-row{
	width: 80%;
	height: 300px;
	margin-left: auto;
	margin-right: auto;
	border: 1px solid black;
	overflow: hidden;
    margin-top: 150px;
}

.second-row> img{
	width: 100%;
	height: 100%;
    margin: 0;
	padding:0;
	}

.wrap{
	width: 60%;
	height: 100%;
	float: left;
}

#footer{
	width: 100%;
	background-color: black;
	height: 15%;
	margin-top: 10%;
	padding: 0;
	margin-left: 0;
	margin-right: 0;
	margin-bottom: 0;
}

@media only screen and (max-width: 767px){
	.second-row{
	    height: 200px;
        margin-top: 360px;		
	}
	.second-row> img{
		height: 100%;
		width: 100%;
	}
	#main-body{
		width: 100%;
	}
	#right-banner{
		display: none;
	}
	#left-banner{
		display: none;
	}
	#cover-page{
		height: 25%;
	}
	.news{
		width: 100%;
	}
	.live-score{
		width: 100%;
	}
	.first-row{
		height: 200px;
	}
	
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
include './navbar.php';
?>

<?php

echo "mysql php connection test.....";
$servername="localhost";
$username="root";
$password="tiger";
$dbname="project";

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}
$sql="select*from login;";
$result=$conn->query($sql);

//if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo '<div class="row" style="height:50px; padding: 30px;">';
echo '<div class="col-md-4">';
echo '<img src="'.$row['imgsrc'].'" alt="image">';//image source
echo '</div>';
echo '<div class="col-md-8">';
echo '<div class="row">';
echo '<b>'.$row['headline'].'</b>';//headline
echo '</div>';
echo '<div class="row">';
echo '<p>'.$row['para'].'</p>';//paragraph
echo '</div>';
echo '</div>';
echo '</div>'; 
}

$conn->close();

?>


<div id="footer" style="color: white; font-family: serif;">
<div id="logoname" style="font-family: 'Bangers', cursive; width: 100%; text-align: center; font-size: 3em; padding-top: 1em;">Howzatt</div>
<div class="row" style="margin-top: 4em;">
<div class="col-md-6"></div>
<div class="col-md-6" style="text-align:right;">Howzatt Cricket(c) All rights reserved</div>
</div>
</div>

</div>

<div id="right-banner">
H<br>O<br>M<br>E<br><br>O<br>F<br><br>C<br>R<br>I<br>C<br>K<br>E<br>T
</div>

</body>
</html>