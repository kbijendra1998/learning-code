<?
   $db=mysqli_connect("localhost","root","","abc");
    if($db){
		echo"";
	}else{
		echo "access denieds";
	}
    
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$pr=$_FILES['image']['name'];
		$temp=$_FILES['image']['tmp_name'];
		$fname=rand().$name;
		move_uploaded_file($temp,"../image/".$fname);
		
	     $q="INSERT INTO `file` (name,profile) VALUES ('".$name."','".$fname."')";
		 $run=mysqli_query($db,$q);
		 if($run){
			 echo "success ho gya hh";
		 }else{
			 echo " not success";
		 }
	}
	echo "<pre>";
print_r($_FILES);
echo "gangester";
?>

    <table>
	<form action="" method="POST" enctype="multipart/form-data">
	    <tr>
		    <td>name</td><td></td><td><input type="text" name="name"></td>
	    </tr>
		<tr>
		    <td>profile</td><td></td><td><input type="file" name="image" value=""></td>
		</tr>
		<tr>
		    <td align="center"><input type="submit" name="submit"></td>
		</tr>
	</form>
	
	</table>
