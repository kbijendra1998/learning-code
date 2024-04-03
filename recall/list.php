<?php
	
	include("db.php");
	$where="where 1";
	
	if(isset($_GET['search_btn'])){
		if($_GET['name']!=""){
			$where .=" and name like '%".$_GET['name']."%'";
		}
		if($_GET['roll']!=""){
			$where .=" and roll=".$_GET['roll'];
		}
	}
	echo $q="select * from record  ".$where;
	$qry=mysqli_query($db,$q);


?>
<table align="center">
<form action="" method="GET">
	<tr>
		<td><input type="text" name="name" placeholder="name"  value="<? if(isset($_GET['name'])){echo $_GET['name'];}?>"></td>
		<td><input type="text" name="roll" placeholder="roll"value="<? if(isset($_GET['roll'])){echo $_GET['roll'];}?>"></td>
		<td><button name="search_btn" type="submit" >search</td>
	</tr>
</table>
<table align="center">
	<tr>
		<th>name</th>
		<th>roll</th>
		<th>address</th>
		<th>photo</th>
		<th colspan="4">Operation</th>
	</tr>
<?php
	while($run=mysqli_fetch_assoc($qry)){
?>
	<tr>
		<td><? echo $run['name'];?></td>
		<td><? echo $run['roll'];?></td>
		<td><? echo $run['address'];?></td>
		<td><image src="../image/<? echo $run['photo'];?>" width="50px" height="50px"></td>
		<td><a href="show.php?id=<?echo $run['id'];?>">view</td>
		<td><a href="remove.php?id=<?echo $run['id'];?>">remove</td>
		<td><a href="modify.php?id=<?echo $run['id'];?>">modify</td>
	</tr>
<?
	}	
?>
<tr><td><a href="list.php">Back to list.</tr></tr>
</table>