<html>
<script>
function validateForm() {
    var t1 = document.forms["myForm"]["team1"].value;
	var t2 = document.forms["myForm"]["team2"].value;
    if (t1==t2) {
        alert("Select two different teams");
        return false;
    }
}
</script>
<?php
$conn=mysqli_connect("localhost","root","","cricket_website");
?>
<form name="myForm" action="playing111.php" onsubmit="return validateForm();" method="post">
Choose 1st team:
<select name="team1">
	<?php
	$q="SELECT * from teams";
	$tid=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($tid))
	{	
	?>
	<option>
	<?php
	echo $row['country'];
	?>
	</option>
	<?php 
	}
	?>
</select>
<br><br>
Choose 2nd team:
<select name="team2">
	<?php
	$q="SELECT * from teams";
	$tid=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($tid))
	{	
	if($team1!=$row['country'])
	{
	?>
	<option>
	<?php
	echo $row["country"];
	?>
	</option>
	<?php 
	}
	
	}
	?>
</select>
<br><br>
Match ID:<input type="text" name="mid">
<input type = "submit" value="Start">
<br><br>
</form>

</html>