<?php
	$a = array("a","b","c","b","a","b");
	
	$countarr = array_count_values($a);
	//$countarr = count($a);
	
	print_r($countarr);
	
//////////////////////////////

	$r = array_key_exists("name",$a);
	if($r)
	{
		echo "exist";
	}else{
		echo "not";
	}
	
//////////////////////////////
	$a = array("a","b","c","b","a","b");
	 array_push($a,"Bijendra",22);
	 echo"<pre>";
	print_r($a);
///////////////////////////////
	
	$c = array("name"=>"bijendra","age"=>"22");
	array_push($c,"sasaram",32);
	echo "<pre>";
	print_r($c);
/////////////////////////////////
	$a = array("a","b","c","b","a","b");
	
	if(array_pop($a)){
		echo "removed";
	}else {
		echo "not reawmoved";
	}
	echo"<pre>";
	print_r($a);
///////////////////////////////////
	$a = array("red","blue","yellow","green","violet","magenta");
	if(in_array("red",$a)){
		echo "found";
	}else{
		echo "not founds";
	}
	echo"<pre>";
	print_r($a);
//////////////////////////////////

	$a = array("a","b","c");
	$b = array("a"=>"india", "b"=>"pak");
	$c = array_search("india",$b);
	print_r($c);
	echo "<br>";
	
	$d = array_search("a",$a);
	print_r($d);
	echo "<br>";
//////////////////////////////////
	$a = array("a","b","c","b","a","b");
	$b = array_unique($a);
	print_r($b);
//////////////////////////////////

	$a = array(2,4,3,2,5,1);
	sort($a);
	print_r($a);
//////////////////////////////////
	
	$a = "hello,1";
	$b = explode(",",$a);
	print_r($b);
	
//////////////////////////////////
	$a = array(2,3,4,5,6);
	$b = implode("",$a);
	print_r($b);
	
?>