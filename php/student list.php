<?php
    $con= mysqli_connect("localhost","root","","bkweb");
	{
		//echo"connection done";
	}
	$select="select * from student";
	$c=mysqli_query ($con,$select);
	//echo "<pre>";
	//print_r($con);
	
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

<html>
    <body>
	    
		<form method="post" action=" ">
		<table>
		<h1> student list</h1>
		    <tr>
			    <th>Name</th> 
				<th>Roll</th>
				<th>Standard</th>
				<th>Address</th>
			</tr>
			<?php
			  while($rs=mysqli_fetch_assoc($c))
				{
					//print_r($rs);
			?>
			<tr>
			    <td><?php echo $rs['name'];?></td>
				<td><?php echo $rs['roll'];?></td>
				<td><?php echo $rs['std'];?></td>
				<td><?php echo $rs['add'];?></td>
			</tr>
		        <?php
				   }
				   
				?>
				
		</table>		
		</form>
    </body>
</html>