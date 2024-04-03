<?php
	 $db=mysqli_connect("localhost","root","","fresher");
   if($db==true){
	/*    "connection is ok";
   }
   else{
	    "connection denied"; */
   }
	
//print_r($_POST);
//print_r($_POST);
$err=array();
	if(isset($_POST['submit'])){
		$system_txt1=trim($_POST['text']);
			$system_txt2=trim($_POST['text']);
			$user_img1=$_FILES['image']['name'];
			$temp1=$_FILES['image']['tmp_name'];
			move_uploaded_file($temp1,"../#/".$user_img1);
		if($_FILES['image']['name']==""){
			 $err[0]="<br><span style='color:red;'>file is required</span>";
		}else{
			$user_img2=$_FILES['image']['name'];
			$temp2=$_FILES['image']['tmp_name'];
			move_uploaded_file($temp2,"../#/".$user_img2);
		}
		if($_FILES['image']['name']==""){
			 $err[1]="<br><span style='color:red;'>file is required</span>";
		}else{
			$user_img3=$_FILES['image']['name'];
			$temp3=$_FILES['image']['tmp_name'];
			move_uploaded_file($temp3,"../#/".$user_img3);
		}
		if($_FILES['image']['name']==""){
			 $err[2]="<br><span style='color:red;'>file is required</span>";
		}else{
			$user_img4=$_FILES['image']['name'];
			$temp4=$_FILES['image']['tmp_name'];
			move_uploaded_file($temp1,"../#/".$user_img4);
		}
		if($_FILES['image']['name']==""){
			 $err[3]="<br><span style='color:red;'>file is required</span>";
		}else{
			$user_img5=$_FILES['image']['name'];
			$temp5=$_FILES['image']['tmp_name'];
			move_uploaded_file($temp1,"../#/".$user_img5);
		}
		if($_FILES['image']['name']==""){
			 $err[4]="<br><span style='color:red;'>file is required</span>";
		}else{
			$user_img6=$_FILES['image']['name'];
			$temp6=$_FILES['image']['tmp_name'];
			move_uploaded_file($temp1,"../#/".$user_img6);
		}
		if($_FILES['image']['name']==""){
			 $err[5]="<br><span style='color:red;'>file is required</span>";
		}else{
			$system_img1=$_FILES['image']['name'];
			$tmp1=$_FILES['image']['tmp_name'];
			move_uploaded_file($tmp1,"../#/".$system_img1);
		}
		if($_FILES['image']['name']==""){
			 $err[6]="<br><span style='color:red;'>system file is required</span>";
		}else{
			$system_img2=$_FILES['image']['name'];
			$tmp2=$_FILES['image']['tmp_name'];
			move_uploaded_file($tmp2,"../#/".$system_img2);
		}
		if($_FILES['image']['name']==""){
			 $err[7]="<br><span style='color:red;'>system file is required</span>";
		}else{
			$system_img3=$_FILES['image']['name'];
			$tmp3=$_FILES['image']['tmp_name'];
			move_uploaded_file($tmp3,"../#/".$system_img3);
		}
		if($_FILES['image']['name']==""){
			 $err[8]="<br><span style='color:red;'>system file is required</span>";
		}else{
			$system_img4=$_FILES['image']['name'];
			$tmp4=$_FILES['image']['tmp_name'];
			move_uploaded_file($tmp4,"../#/".$system_img4);
		}
		if($_FILES['image']['name']==""){
			 $err[9]="<br><span style='color:red;'></span>";
		}else{
			
		}
		if($system_txt1==""){
			 $err[10]="<br><span style='color:red;'>please input some text for system1</span>";
		}
		if($system_txt2==""){
			 $err[11]="<br><span style='color:red;'>please input some text for system2</span>";
		}
		if(empty($err))
		{
			/* $form="insert into form (user_image1,user_image2,user_image3,user_image4,user_image5,user_image6,system_image1,system_image2,system_image3,system_image4,system_text1,system_text2) values ('".$user_img1."','".$user_img2."','".$user_img3."','".$user_img4."','".$user_img5."','".$user_img6."','".$system_img1."','".$system_img2."','".$system_img3."','".$system_img4."','".$system_txt1."','".$system_txt2."')";
			$qry=mysqli_query($db,$form);
			if($qry){
				 echo "file uploaded";
			}else{
				 echo "unable to upload";
			} */
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
	</head>
<body>
<table align="center">
	<form action="" method="POST" enctype="multipart/form-data">
		<tr><td>user image1<?php if(isset($err[0])){echo $err[0];}?></td><td><input type="file" name="image"></td></tr>
		<tr><td>user image2<?php if(isset($err[1])){echo $err[1];}?></td><td><input type="file" name="image"></td></tr>
		<tr><td>user image3<?php if(isset($err[2])){echo $err[2];}?></td><td><input type="file" name="image"></td></tr>
		<tr><td>user image4<?php if(isset($err[3])){echo $err['3'];}?></td><td><input type="file" name="image"></td></tr>
		<tr><td>user image5<?php if(isset($err[4])){echo $err['4'];}?></td><td><input type="file" name="image"></td></tr>
		<tr><td>user image6<?php if(isset($err[5])){echo $err['5'];}?></td><td><input type="file" name="image"></td></tr>
		<tr><td>system image1<?php if(isset($err[6])){echo $err['6'];}?></td><td><input type="file" name="image"></td></tr>	
		<tr><td>system image2<?php if(isset($err[7])){echo $err['7'];}?></td><td><input type="file" name="image"></td></tr>	
		<tr><td>system image3<?php if(isset($err[8])){echo $err['8'];}?></td><td><input type="file" name="image"></td></tr>	
		<tr><td>system image4<?php if(isset($err[9])){echo $err['9'];}?></td><td><input type="file" name="image"></td></tr>	
		<tr><td>system text1<?php if(isset($err[10])){echo $err['10'];}?></td><td><input type="text" name="text"></td></tr>	
		<tr><td>system text2<?php if(isset($err[11])){echo $err['11'];}?></td><td><input type="text" name="text"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td></tr>
	</form>
</table>
</body>
</html>