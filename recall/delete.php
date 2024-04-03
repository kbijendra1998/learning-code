<?php
   include("db.php");
   
   $delete="DELETE FROM `RECORD` WHERE id=".$_GET['id'];
   $qry=mysqli_query($db,$delete);
        if ($qry){
			echo "Data deleted";
		}
		else{
			echo "Sorry unable to delete";
		}
    header("location:display.php");
?>