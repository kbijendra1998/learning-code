<?
include("db.php");
	$view="select * from `record` where id=".$_GET['id'];
	$qry=mysqli_query($db,$view);

?>
<table>
	<tr>
		<th>name</th>
		<th>roll</th>
		<th>address</th>
		<th>photo</th>
		<th colspan="5">Operation</th>
	</tr>
<?
	$exe=mysqli_fetch_assoc($qry);
?>
	<tr>
		<td><? echo $exe['name'];?></td>
		<td><? echo $exe['roll'];?></td>
		<td><? echo $exe['address'];?></td>
		<td><image src="../image/<? echo $exe['photo'];?>" width="50px" height="50px"></td>
		<td><a href="remove.php">remove</a></td>
		<td><a href="modify.php">modify</a></td>
	</tr>
<td><a href="list.php">back to list</a></td>
</table>