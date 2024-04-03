<?
   include("conn.php");
     if(!isset($_GET['id']) || $_GET['id']!>0){
		 header(location:list.php);
	 }
  $qry="DELETE from student where id=".$_GET['id'];
  $run=mysqli_query($con,$qry);
  header("location:list.php");

?>