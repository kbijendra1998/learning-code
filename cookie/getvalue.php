<?php
/////for get cookie value///////////
	//include("cookie.php");
	//$name=$_COOKIE['biju'];
	//echo $name;
	if(!isset($_COOKIE['biju'])){
		include("logout.php");
	}else{
		//echo "cookie is  set";
		setcookie("biju","dfdf",time()+10);
		include("login.php");
	}
?>