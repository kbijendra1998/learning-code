 <html>
 <body>
 <form action="" method="POST">
 <label for="title">Title</label>
    <input type="text" name="name" /><br />

    <label for="text">address</label>
    <input type="text" name="address" /><br />

    <input type="submit" name="submit" value="submit" />

</form>

</body>
	
</html>
<?php
	if(isset($_POST[''])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		
	}
	echo "<pre>";
	print_r($_POST);

?>