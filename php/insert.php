<?
include("conn.php");

   if (isset($_POST['submit']))
  {
	    
		$sn=$_POST['name'];
		$rn=$_POST['roll'];
		$std=$_POST['std'];
		$add=$_POST['add'];
    $qry="INSERT INTO `student` (`name`,`roll`,`standard`,`address`) VALUES ('".$sn."','".$rn."','".$std."','".$add."')";
	
      $run=mysqli_query($con,$qry);
if($run)
   {
	//echo "Data inserted successfully";
   }
else
     {
	 //  echo "Data not inserted";
     }
   
  }

?> 


<html>
<head>
</head>
<body>
         <form method="POST" action="">
            <table align="center" border=2>
                <tr><td>Name</td><td><input type="text" name="name"></td></tr>
                <tr><td>Roll</td><td><input type="text" name="roll"></td></tr>
                <tr><td>Standard</td><td><input type="text" name="std"><td></tr>
				<tr><td>Address</td><td><input type="text" name="add"><td></tr>
				<tr>
				    <td colspan=2 align="center"><input type="submit" name="submit" value="submit"></td>
				</tr>
            </table>
         </form>
</body>
</html>