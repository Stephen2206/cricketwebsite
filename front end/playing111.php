<html>

<?php
$conn=mysqli_connect("localhost","root","","cricket_website");
$t1=$_POST['team1'];
$t2=$_POST['team2'];
?>
<form action="match.php" method="post">
Batting First:
<select name="bat">
<option>
	<?php
	echo "$t1"
	?>
</option>
<option>
	<?php
	echo "$t2"
	?>
</option>
</select>
<table border="1px">
	<th>Select Players</th>
</tr>
<h1>Select Playing 11</h1>
<?php
$q="SELECT player_name from players WHERE country='$t1'";
$p1=array();
$players=mysqli_query($conn,$q);
?>
<tr>
<td>
<select multiple name="team1[]">
	<?php
	while($row=mysqli_fetch_array($players))
	{	
	?>
	<option>
	<?php
	echo $row["player_name"];
	?>
	</option>
	<?php	
	}
?>
</select></td></tr></table>


<h1>Select Playing 11</h1>
<?php
$q="SELECT player_name from players WHERE country='$t2'";

$players=mysqli_query($conn,$q);
?>
<tr>
<td>
<select multiple name="team2[]">
	<?php
	while($row=mysqli_fetch_array($players))
	{	
	?>
	<option>
	<?php
	echo $row["player_name"];
	?>
	</option>
	<?php	
	}
?>
</select></td></tr></table>

<input type= "submit" value="Proceed">
</form>



</html>