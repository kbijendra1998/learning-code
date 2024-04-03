<?
include("conn.php");
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$std=$_POST['std'];
	$add=$_POST['add'];
	
	$update="Update STUDENT SET name='$name',roll='$roll',standard='$std',address='$add' where id=".$_GET['id'];
	
	$qry=mysqli_query($con,$update);
	if($qry==true){
		echo "Data update proceed";
	}
	else{
		echo "update not proceed";
	}
}
    $select="SELECT * FROM STUDENT WHERE id=".$_GET['id'];
	$run=mysqli_query($con,$select);
	$c=mysqli_fetch_assoc($run);

?>

<html>
    <body>
	    <h1> Update Record</h1>
		<form method="post" action=" ">
		<table border="1">
		    <tr><td>Name</td> <td><input type="text" name="name" value="<? echo $c['name'];?>"></td></tr>
		    <tr><td>Roll no</td><td><input type="text" name="roll" value="<? echo $c['roll'];?>"></td></tr>
		    <tr><td>Standard</td><td><input type="text" name="std" value="<? echo $c['standard'];?>"></td></tr>
			<tr><td>Address</td><td><input type="text" name="add" value="<? echo $c['address'];?>"></td></tr>
			<tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td></tr>
	    </table>	
	</form>
    </body>
</html>