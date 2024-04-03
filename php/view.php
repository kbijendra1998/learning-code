<?
include("conn.php");
if (!isset($_GET['id']) || $_GET['id'] ==""){
	header('location:list.php');
} 
   $select="SELECT * FROM student WHERE id=".$_GET['id'];
    $qry=mysqli_query($con,$select);
	/* $row=mysqli_num_rows($con,$select);
	if($row ==0)
	{
		header("location:list.php");
	} */
	//print_r ($qry)
	//phpinfo();
?>

<table align="center" border='1' >
		<tr><td align='center' colspan='7'><h1> <i><font color="pink">STUDENT LIST</i></h1></td></tr>
		    <tr>
			    <th>Name</th> 
				<th>Roll</th>
				<th>Standard</th>
				<th>Address</th>
				
			</tr>
			<?
			  $rs=mysqli_fetch_assoc($qry);
			?>
			<tr>
			    <td><?php echo $rs['name'];?></td>
				<td><?php echo $rs['roll'];?></td>
				<td><?php echo $rs['standard'];?></td>
				<td><?php echo $rs['address'];?></td>
			</tr>
</table>