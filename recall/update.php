<?
 include("db.php");
 
    if(isset($_POST['submit'])){
        $name=trim($_POST['name']);
        $rn=trim($_POST['roll']);
		$add=trim($_POST['add']);
		$imagename=$_FILES['image']['name'];
		$temp_name=$_FILES['image']['tmp_name'];
		$fname=rand().$imagename;
			/* if($name==""){
			   $err[0]="<br><span style='color:red'>please fill name</span>";
		   }
		   if($rn==""){
			   $err[1]="<br><span style='color:red'>please fill your roll no</span>";
		   }
		   if($add==""){
			   $err[2]="<br><span style='color:red'>please fill your address</span>";
		   }
		   if($_FILES['image']['name']==""){
			   $err[3]="<br><span style='color:red'>File not found</span>";
		   }
		   if($_FILES['image']['size']>=1073741824){
			   $err[3]="<br><span style='color:red'>File size not valid</span>";
		   }
		   if(empty($err)){ */
		move_uploaded_file($temp_name,"../image/".$fname);
	   $update="UPDATE `RECORD` SET name='".$name."',roll='".$rn."',address='".$add."' ,photo='".$fname."' WHERE id=".$_GET['id'];
	$qry=mysqli_query($db,$update);
	if($qry){
		echo "Data Updated <a href='Display.php'>Go To Student List</a><br>";
		echo "Data Updated <a href='insert.php'>Go To Insert Student</a>";
	}
	else{
		echo "Data not Updated";
	}
		   
}
      
?>
<?
    $select="SELECT * FROM `RECORD`  WHERE id=".$_GET['id'];
	$qry=mysqli_query($db,$select);
	   if($qry){
	    $run=mysqli_fetch_assoc($qry);
	   }
?>
<html>
<table align="center" border="1">
      
       <form action="" method="POST" enctype="multipart/form-data">
	   <tr><td colspan="2" align="center">Update Record</td></tr>
	         <tr><td>Name<? /* if(isset($err[0])){echo $err[0];} */?></td><td><input type="text" name="name" value="<?php echo $run['name'];?>"></td></tr>
			 <tr><td>Roll<? /* if(isset($err[1])){echo $err[1];} */?></td><td><input type="text" name="roll" value="<?php echo $run['roll'];?>"></td></tr>
			 <tr><td>Address<? /* if(isset($err[2])){echo $err[2];} */?></td><td><input type="text" name="add" value="<?php echo $run['address'];?>"></td></tr>
			 <tr><td>Photo</td><td><input type="file" name="image" value=""></td></tr>
			 <tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
			 
			        
       </form>
</table>
</body>
</html>