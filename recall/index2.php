<html>

<table>
<?php
	$conn=mysqli_connect("localhost","root","","bkweb");
	if(1){
//echo "connection done";
	}else{
		echo "sorry to connect";
	}
	
	
	$total_record_per_page=5;
	$query="select * from record ";
	$q=mysqli_query($conn,$query);
	$total_record=mysqli_num_rows($q);
	?>
	<tr>
			<th>id</th>
			<th>name</th>
			<th>roll</th>
			<th>address</th>
			<th>photo</th>
			<th colspan="3">operation</th>
		<tr>
<?php	$total_page=ceil($total_record/$total_record_per_page);
	
	
		
		if(isset($_GET['page_no'])){
			$page_no=$_GET['page_no'];
		}else{
			$page_no=1;
		}
	$offset=($page_no-1)*$total_record_per_page;
	
	
		
		
		$query="select * from record limit" .$offset. ','.$total_record_per_page;
		$q=mysqli_query($conn,$query);
		

		while($res=mysqli_fetch_assoc($q)){
?>
		
		<tr>
			<td><?php if(isset($res['id'])){echo $res['id'];}?></td>
			<td><?php if(isset($res['name'])){echo $res['name'];}?></td>
			<td><?php if(isset($res['roll'])){echo $res['roll'];}?></td>
			<td><?php if(isset($res['address'])){echo $res['address'];}?></td>
			<td><img src="../image/<?php echo $res['photo'];?>" width="50px" height="50px"></td>
			<td><a href="show.php?id=<?php echo $res['id'];?>">show</a></td>
			<td><a href="modify.php?id=<?php echo $res['id'];?>">modify</a></td>
			<td><a href="remove.php?id=<?php echo $res['id'];?>">remove</a></td>
		</tr>
<?php
		}
?>
	
	
<?	for($page_no=1; $page_no<=$total_page; $page_no++){
		echo '<a href="index.php?page_no='.$page_no.'">'.$page_no.'</a>';
}
		
?>
</table>
</html>