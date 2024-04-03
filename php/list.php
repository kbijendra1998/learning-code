<?
 $con= mysqli_connect("localhost","root","","bkweb");
	{
		//echo"connection done";
	}
	$select="select * from student";
	$c=mysqli_query ($con,$select);
?>

		<table align="center" border='1' >
		<tr><td align='center' colspan='7'><h1> <i><font color="pink">STUDENT LIST</i></h1></td></tr>
		    <tr>
			    <th>Name</th> 
				<th>Roll</th>
				<th>Standard</th>
				<th>Address</th>
				<th colspan='3'>To Do</th>
			</tr>
			<?php
			  while($rs=mysqli_fetch_assoc($c))
				{
					//print_r($rs);
			?>
			<tr>
			    <td><?php echo $rs['name'];?></td>
				<td><?php echo $rs['roll'];?></td>
				<td><?php echo $rs['standard'];?></td>
				<td><?php echo $rs['address'];?></td>
				<td><a href="view.php?id=<? echo $rs['id'];?>">View</a></td>
				<td><a href="delete.php?id=<? echo $rs['id'];?>">Delete</a></td>
				<td><a href="update.php?id=<? echo $rs['id'];?>">Update</a></td>
				
			</tr>
		        <?php
				 }
				   
				?>
				
		</table>		