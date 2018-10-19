<html>
<h2>1st innings<h2>
<table border="1px">
<tr><th>Player</th><th>Player</th><th>Balls</th><th>4's</th><th>6's</th></tr>

<?php
foreach ($_POST['team1'] as $select)
{
echo "<tr><td>".$select."</td>";
?>
<td>
<input type="text" name="a1" value="0">
</td>
<td>
<input type="text" name="balls" value="0">
</td>
<td>
<input type="text" name="fours" value="4's">
</td>
<td>
<input type="text" name="sixes" value="6's">
</td>
</tr>
<?php
}
?>

</table>
</html>