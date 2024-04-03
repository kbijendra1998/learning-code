

<?
include("db.php");
//print_r($_FILES);

?>
<?
 
   if (isset($_POST['submit'])){
	   $err=array();
	   $name=trim($_POST['name']);
	   $rn=trim($_POST['roll']);   
	   $add=trim($_POST['add']);
	   $fname="";
	   
	    if($name==""){
		   $err[0]="<br><span style='color:red;'>Please fill Name</span>";
	   }
	   if($rn==""){
		   $err[1]="<br><span style='color:red;'>Please fill roll</span>";
	   }
	   if($add==""){
		   $err[2]="<br><span style='color:red;'>Please fill address</span>";
	   }

	
	     if($_FILES['image']['size']>0){
			
		 if($_FILES['image']['size']>=1048576){
		 $err[4]="<br><span style='color:red;'>File size is Not Valid</span>";
		 }else{
				  $filename=$_FILES['image']['name'];
						   $file_tempname=$_FILES['image']['tmp_name'];
						   $fname="image".rand().".".$filename;
				
				       move_uploaded_file($file_tempname,"../image/".$fname);
						
		      }
	   } 
	 
	  print_r($fname);
			 if(empty($err)){
					 
					   
					   
				  $insert="INSERT INTO `RECORD` (name,roll,address,photo) VALUES ('".$name."','".$rn."','".$add."','".$fname."')";
				   $qry=mysqli_query($db,$insert);
				   if($qry){
					   echo "<font color='green'>Data inserted<a href='display.php'>Display list now.</a>";
				   }
				   else{
					   echo "not inserted";
				   } 
	   }
	   }
	  
   
?>

<html>
<body>
<table align="center" border="1">
      
       <form action="" method="POST" enctype="multipart/form-data">
	   <tr><td colspan="2" align="center">Student Record</td></tr>
	         <tr><td>Name<? if(isset($err[0])){echo $err[0];} ?></td><td><input type="text" name="name"></td></tr>
			 <tr><td>Roll<? if(isset($err[1])){echo $err[1];} ?></td><td><input type="text" name="roll"></td></tr>
			 <tr><td>Address<? if(isset($err[2])){echo $err[2];} ?></td><td><input type="text" name="add"></td></tr>
			 <tr><td>Photo<? if(isset($err[4])){echo $err[4];} ?><? if(isset($err[4])){echo $err[4];} ?></td><td><input type="file" name="image" value=""></td></tr>
			 <tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
			 
			        
       </form>
</table>
</body>
</html>