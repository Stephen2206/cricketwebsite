<html>
<body>
<br>
<br><br>


<br>
Select Batsman 1:
<select name="b1">
<option>
<?php
foreach ($_POST['team1'] as $select)
{
echo "<option>".$select."</option>";
}
?>
</select>
<br>



Select Batsman 2:
<select name="b2">
<option>
<?php
foreach ($_POST['team1'] as $select)
{
echo "<option>".$select."</option>";
}
?>
</select>
<br>



Select Bowler:
<select name="bo">
<br>
<option>
<?php
foreach ($_POST['team2'] as $select)
{
echo "<option>".$select."</option>";
}
?>
</select>
<br>

<input type="int" value="0" name="runs">
<input type="int" value="0" name="wickets">
<button onclick="batsman(0,0)">Confirm Batsman</button>





<input type="submit" value="1" onclick=batsman(1,0)>
<input type="submit" value="2" onclick=batsman(2,0)>
<input type="submit" value="3" onclick=batsman(3,0)>
<input type="submit" value="4" onclick=batsman(4,0)>
<input type="submit" value="5" onclick=batsman(5,0)>
<input type="submit" value="6" onclick=batsman(6,0)>

<select name="extras" selected="extras">
	<option>No Ball</option>
	<option>Wide Ball</option>
</select>
<select name="out" selected="wicket">
	<option>Bowled</option>
	<option>Stumped</option>
	<option>Run Out</option>
	<option>Hit Wicket</option>
	<option>Caught</option>
</select>
<script>
	function batsman(r,w)
	{
		var x=parseInt(document.getElementById("runs").value);
		var y=parseInt(document.getElementById("wickets").value);
		var newruns;
		var newwicket;
		newruns=x+r;
		newwicket=y+w;
		document.getElementById("runs").value=newruns;
		document.getElementById("runs").value=newwicket;
	}
</script>
</body>
</html>