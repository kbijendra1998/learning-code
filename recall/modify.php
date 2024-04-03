<?php
$err=array();
	include("db.php");
	print_r($_FILES);
	if(isset($_POST['submit'])){
		$name=trim($_POST['name']);
		$rn=trim($_POST['roll']);
		$add=trim($_POST['add']);
		
		 if($name=""){
			$err[0]=="<br><span style='color:red;'>please enter your name</span>";
		}
		if($rn==""){
			$err[1]="<br><span style='color:red;'>please enter your rollno.</span>";
		}
		if($add==""){
			$err[2]="<br><span style='color:red;'>please enter your full address</span>";
		}
		if($_FILES['image']['size']>0){
			if($_FILES['image']['size']<=1048576){
				
			}
		}
		if(empty($err)){ 
			$imagename=$_FILES['image']['name'];
				$temp_name=$_FILES['image']['tmp_name'];
				$fname="profile.rand().".".$imagename";
			move_uploaded_file($temp_name,"../image/".$fname);
		echo	$update="update record set name='".$name."',roll='".$rn."',address='".$add."',photo='".$fname."' where id=".$_GET['id'];
			
			$qry=mysqli_query($db,$update);
			if($qry){
				echo "data upadated successfully";
			}else{
				echo "data not updated";
			}
		}
		
	}


?>
<?php
	$q="select * from record where id=".$_GET['id'];
	$qry=mysqli_query($db,$q);
	
	$exe=mysqli_fetch_assoc($qry);
?>
<html>
<table align="center" border="1">
      
       <form action="" method="POST" enctype="multipart/form-data">
	   <tr><td colspan="2" align="center">Modify Record</td></tr>
	         <tr><td>Name</td><td><input type="text" name="name" value="<?php if(isset($exe['name'])) {echo $exe['name'];}?>"></td></tr>
			 <tr><td>Roll</td><td><input type="text" name="roll" value="<?php if(isset($exe['roll'])){echo $exe['roll'];}?>"></td></tr>
			 <tr><td>Address</td><td><input type="text" name="add" value="<?php if(isset($exe['address'])){echo $exe['address'];}?>"></td></tr>
			 <tr><td>Photo</td><td><input type="file" name="image" value="<?php if(isset($exe['image'])){echo $exe['image'];}?>"></td></tr>
			 <tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
			 
			        
       </form>
</table>
</body>
</html>