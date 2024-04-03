<? 
include("db.php");

$where="where 1";
if(isset($_GET['search_btn'])){
	if($_GET['name']!=""){
		$where .=" and name like '%".$_GET['name']."%'";
	}
	if($_GET['roll']!=""){
		$where .=" and roll like '%".$_GET['roll']."%'";
	}
	if($_GET['address']!=""){
		$where .=" and address like '%".$_GET['address']."%'";
	}
}
	echo $res="SELECT * from `record` ".$where;
	$qry=mysqli_query($db,$res);



?>
<table align="center">
<form action="" method="GET">
	<tr>
	<td>
		<input type="text" name="name" placeholder="name" value="<? if(isset($_GET['name'])) { echo $_GET['name'];}?>">
	</td>
	<td>
		<input type="text" name="roll" placeholder="roll" value="<? if(isset($_GET['roll'])) { echo $_GET['roll'];}?>">
	</td>
	<td>
		<input type="text" name="address" placeholder="address" value="<? if(isset($_GET['address'])) { echo $_GET['address'];}?>">
	</td>
	<td>
		<button name="search_btn" type="submit">search</button></td>
	<td><a href="search.php"><button name="reset" type="button">reset</a></button></td>
	</tr>
</form>
</table>


<table align="center">
<tr>
	<th>name</th>
	<th>roll</th>
	<th>address</th>
	<th>photo</th>
	<th colspan="4">Operation</th>
</tr>
<?
	while($exe=mysqli_fetch_assoc($qry)){
?>
<tr>
	<td><? echo $exe['name'];?></td>
	<td><? echo $exe['roll'];?></td>
	<td><? echo $exe['address'];?></td>
	<td><img src="../image/<? echo $exe['photo'];?>"height="50px"; width="50px"</td>
	
</tr>
<?
	}
?>
	<td><a href="search.php">Back to List</a></td>
</table>