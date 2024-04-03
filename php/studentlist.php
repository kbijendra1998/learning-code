<?php
    $con= mysqli_connect("localhost","root","","user");
	{
		//echo"connection done";
	}
	echo "<pre>";
	//print_r($con);
	$select="select * from list";
	$c=mysqli_query ($con,$select);
	//print_r($c);
	//$abc=array('name'=>'a','roll'=>'b','address'=>'c','xyz'=>'d');
	/* 
	function aaaa($first_no,$second_no){
		$inf_arr=array();
				for($i=0;$i<$second_no;$i++){
					$inf_arr[1][]=$first_no*$i;
				}
		
		 return  $inf_arr;
     //return	$abc=array('name'=>'a','roll'=>'b','address'=>'c','xyz'=>'d');
	}
	
	
	$second_no=10;
	$first_no=5;
	
	
	$get_array=aaaa($first_no,$second_no);
	
	print_r($get_array);
	echo $get_array[1][6]; */
	
?>
		<table>
		 
		    <tr>
			    <th>Name</th><th>Roll no</th><th>Phone no</th><th>Gender</th><th>Address</th><th colspan=3>Operation</th>
			</tr>
			<?php
			  while($rs=mysqli_fetch_assoc($c))
				{
					//print_r($rs);
			?>
			<tr>
			    <td><?php echo $rs['name'];?></td>
				<td><?php echo $rs['roll_no'];?></td> 
				<td><?php echo $rs['phone_no'];?></td>
				<td><?php echo $rs['gender'];?></td>
				<td><?php echo $rs['address'];?></td>
				
				<td><a href="delete.php?id=<?php echo $rs['id'];?>">delete</td>
				<td><a href="update.php?id=<?php echo $rs['id'];?>">update</td>
                <td><a href="view.php?id=<?php echo $rs['id'];?>">view</td>	
			</tr>
		        <?php
				   }
				   
				?>
		</table>		
		</form>
    </body>
