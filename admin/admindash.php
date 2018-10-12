<html>
<head>
<title>Volunteer Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body{
	margin: 0;
	padding: 0;
	border: 0;
	background:linear-gradient( 90deg, #00f2dc, #00c7ff);
    height: 100%;
	width: 100%;
}	
#section1{
height: 100%;
background-color: white;
font-family: Courier, Arial, Serif;
color: #0097c1;	
}
#logoutbtn{
border: 1px solid #0097c1;
border-radius: 6px;
color: #0097c1;
font-weight: bold;
font-size: 1.5em;
background: none;
margin-right: 20px;
margin-top: 20px;
}

.btnsection> button{
	border-radius: 6px;
	background: none;
    font-weight: bold;
    border: 1px solid #0097c1;
    font-size: 3em;
    height:	2em;
}
.btnsection{
	text-align: center;
	margin-top: 3em;
}

@media only screen and (max-width: 767px){
	#logoutbtn{
		width: 100%;	
	}
	 
		
}
</style>
<?php
session_start();
if(isset($_SESSION['user'])){
	//echo "congrats you have logged in";
}
else{
	header("Location: ./vollogin.php");
}

?>
</head>

<body>
<div class="container" id="section1">
<div style="width: 100%; text-align: right;">
<h2 style="padding: 0; margin-top: 10px; float: left;">Admin Dashboard</h2>
<form method="POST" action="vollogout.php">
<input type="submit" name="lgt" id="logoutbtn" value="Logout">
</form>
</div>

<div class="row">
<div class="col-md-4"><div class="btnsection"><button>Add Player</button></div></div>
<div class="col-md-4"><div class="btnsection"><button>Add Team</button></div></div>
<div class="col-md-4"><div class="btnsection"><button>Add Match</button></div></div>
</div>
<div class="row">
<div class="col-md-6"><div class="btnsection"><button>Add Batsman</button></div></div>
<div class="col-md-6"><div class="btnsection"><button>Add Bowler</button></div></div>
<!--<div class="col-md-4"><div class="btnsection"><button>Add Player</button></div></div>-->
</div>


</div>
</body>
</html>