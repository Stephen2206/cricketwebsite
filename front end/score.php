<html>

<div id="Batsman" align="center">Openers</div>
<h1 id="currentscore"align="right">Live Score</h1>
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
<script>
	document.getElementById("confirm_batsman").onclick=function(){
		var a = document.getElementById("b1").value;
		document.getElementById("Batsman").innerHTML="a";
	}
</script>
<button id="confirm_batsman">Confirm Batsman</button>
<br><br>



Select Bowler:
<select name="bo">
<option>
<?php
foreach ($_POST['team2'] as $select)
{
echo "<option>".$select."</option>";
}
?>
</select>
<br>



<input type="submit" value="1">
<input type="submit" value="2">
<input type="submit" value="3">
<input type="submit" value="4">
<input type="submit" value="5">
<input type="submit" value="6">
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

</html>