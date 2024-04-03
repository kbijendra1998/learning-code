<?
	include("db.php");
	$r="DELETE FROM `record` WHERE id=".$_GET['id'];
	/* $r="DELETE from record where id=".$_GET['id']; */
	$qry=mysqli_query($db,$r);
	if($qry){
	echo "id removed";
	}
		else{
			echo "unable to remove";
		}
	
	header("location:list.php");
	

?>