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
    margin: auto;
}

.wrap> img{
	height: 100%;
    width: 100%;
    border-right: 1px solid black;	
}

.second-row{
	width: 80%;
	height: 300px;
	margin: auto;
}

.second-row> img{
	width: 100%;
	height: 100%;
}

.wrap{
	width: 60%;
	height: 100%;
	float: left;
}

@media only screen and(max-width: 500px){
	
	.news{
	height: 100%;
	width: 100%;
	margin-top: 20px;
	//box-shadow: 3px 3px 5px black, -3px 3px 5px black;
    float: none;
    }

.live-score{
	float: right;
	width: 100%;
	height: 100%;
    //box-shadow: 3px 3px 5px black, -3px 3px 5px black;
    margin-top: 20px;
    float: none;	
}

.second-row{
 height: 100px;
 
}
.second-row> img{
 height: 50%;
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
<div class="first-row">
<div class="news">
<div class="wrap">
<img src="../images/news/rahane.jpg" width="100%" height="100%">
</div>
<h4>Ajinkya Rahane will join Team Inida</h4>
<p>Team India Vice Captain Akinkya Rahane was given the go ahead by
Team India doctor Vijay Mane to join the team in England for the ongoing
5 day test match series. Rahane was India's leading run getter last year in England.</p>
</div>

<div class="live-score">
<h4 style=" font-family: serif; text-align: center; font-weight: bold;">Live Score</h4>
</div>

</div>

<div class="second-row" style="margin-top: 100px; border: 1px solid black;">
<img src="../images/teams/mostruns.jpg">
</div>

</div>

<div id="right-banner">
H<br>O<br>M<br>E<br><br>O<br>F<br><br>C<br>R<br>I<br>C<br>K<br>E<br>T</div>

</body>
</html>