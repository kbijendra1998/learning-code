<?
  include("db.php");
    $view="SELECT * FROM `RECORD` WHERE id=".$_GET['id'];
	$qry=mysqli_query($db,$view);
?>
<table align="center">
    <tr>
	    <th>Name</th>
		<th>Roll</th>
		<th>Address</th>
		<th>Photo</th>
		<th colspan="5">Operation</th>
	</tr>
	<?php
	    $result=mysqli_fetch_assoc($qry);
	
	?>
	
	<tr>
	    <td><?php echo $result['name']; ?></td>
		<td><?php echo $result['roll'];?></td>
		<td><?php echo $result['address'];?></td>
		<td><img src="../image/<? echo $result['photo'];?>" width="50px" height="50px"></td>
		<td><a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
		<td><a href="update.php?id=<?php echo $result['id'];?>">Update</a></td>
	</tr>

</table>
