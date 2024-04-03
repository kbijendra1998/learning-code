<?php 

//include ("db.php");
 $returndata=array();
		$conn=mysqli_connect('localhost','root','','bkweb');
		//if($conn){ echo "bjggjk";}
		
	print_r($_GET);
//echo "bkjhkjh";
 ?>
<style>
	
	td{
		padding:10px;
	}
	
	</style>
<?



        $where="where 1 ";
if(isset($_GET['search_btn'])){
		if($_GET['name']!=""){
		$where .="and name like '%".$_GET['name']."%'";
		}
		if($_GET['roll']!=""){
		$where .="and roll= '".$_GET['roll']."'";
		}
}

	
     echo  $list="SELECT * FROM `RECORD` ".$where;
  //$qry=mysqli_query($db,$list);
  
  
  $sql=$list;
		$q_exe=mysqli_query($conn,$sql);
	 $toral_rows_count=mysqli_num_rows($q_exe);


include("function.php");
$returndata=pegination($toral_rows_count,5,$sql,$conn);


//echo "<pre>";


	print_r($returndata['pages']); 
	print_r($returndata['sql']); 
	//print_r($returndata['fetch_data']); 
	foreach($returndata['fetch_data'] as $eachrow){
		echo $eachrow['id']."=>".$eachrow['name']."=>".$eachrow['roll']."<br>";
	}

?>
	
<table align="center">
<form action="" method="GET">
    <tr>
	    <td><input type="text" name="name" placeholder="name" value="<? if(isset($_GET['name'])){ echo $_GET['name'];}?>"></td>
	    <td><input type="text" name="roll" placeholder="roll" value="<? if(isset($_GET['roll'])){echo $_GET['roll'];}?>"></td>
		<td><a href="<?php echo $returndata['keys']?>"><button name="search_btn" type="">Search</button></a></td>
		<td><a href="display.php"><button name="reset" type="button">reset</button></a></td>
		
	</tr>
</form>
</table>
<table align="center">
<tr>
    
	<th>Name</th>
	<th>Roll</th>
	<th>Address</th>
	<th>Photo</>
	<th colspan="4">Operation</th>
</tr>
    <?
	    //while($run=mysqli_fetch_assoc($qry)){
		
		
	?>
<tr>
    <td><? //echo $run['name'];?></td>
	<td><? //echo $run['roll'];?></td>
	<td><? //echo $run['address'];?></td>
	<td><img src="../image/<? //echo $run['photo'];?>" width="50px" height="50px"></td>
	<td><a href="update.php?id=<? //echo $run['id'];?>">Update</td>
	<td><a href="view.php?id=<? //echo $run ['id'];?>">View</td>
	<td><a href="delete.php?id=<? //echo $run ['id'];?>">Delete</td>
</tr>

<?
 // }
?>

</table>