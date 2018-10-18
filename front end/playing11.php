<html>


<?php
$conn=mysqli_connect("localhost","root","","cricket_website");
$t1=$_POST['team1'];
$t2=$_POST['team2'];
?>
<form action="score.php" method="post">
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
<tr><th><?php echo $t1;?></th>
	<th>Select Players</th>
</tr>
<h1>Select Playing 11</h1>
<?php
$q="SELECT player_name from players WHERE country='$t1'";
$count=1;
$p1=array();
while($count<=11)
{
	//echo "<br>".$count;
	$players=mysqli_query($conn,$q);
?>
<tr>
<td>
<?php
echo $count."<br>";
?>
</td>
<td>
<select name="$p1[$count]">
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
	$count=$count+1;
}
?>
</select></td></tr></table>

<input type= "submit" value="Proceed">
</form>

<!Team2>

<table border="1px">
<tr><th><?php echo $t1;?></th>
	<th>Select Players</th>
</tr>
<?php
$q="SELECT player_name from players WHERE country='$t2'";
$count=1;
$p2=array();
while($count<=11)
{
	//echo "<br>".$count;
	$players=mysqli_query($conn,$q);
?>
<tr>
<td>
<?php
echo $count."<br>";
?>
</td>
<td>
<select>
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
	$count=$count+1;
}
?>
</select></td></tr></table><br><br>


</html>