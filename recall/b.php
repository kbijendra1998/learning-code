<?php
	for($a=1; $a<=100; $a=$a+10){
		for($j=$a; $j<$a+10; $j++){
			echo $j." ";
		}
		echo "<br>";
	}
	
////////////////////////////////////////
	

$a= array('A','B','C','D');
$b=array('T','C','C','E');
 foreach($a as $f){
 $b[]=$f;
 }
 
 
 $c=array();
foreach($b as $k){
  if(!in_array($k,$c)){
    $c[]=$k;
  }
}
 print_r($c);


//////////////////////////////////////////

	 $a=array(2,4,2,7,4,5,6,9,3,2);
	$d=array(4,3,5,4,2);
	 //$b=array_unique(array_merge($a,$d));
	 foreach($a as $b){
		 $d[]=$b;
	 }
	 $c=array();
	 foreach($d as $k){
	 if(!in_array($k,$c)){
		 $c[]=$k;
	 }
	 }
	 echo "<pre>";
	print_r($c); 

////////////////////////////////////////////


	class bk{
		public $a=45;
		private $b=656;
		protected $c=876;
		
		function add(){
			echo ($this->a+$this->b)."<br>";
			echo $this->b."<br>";
			echo $this->c;
			
		}
		function info(){
			$a="hello to everyone";
			echo $a;
			
		}
	}
	$abc=new bk;
	$abc->add();
	$abc->info();
	//$abc->add();
	//////////////////////////////////////
	
	 $a=array(1,3,8,6,7,3,2);
	$b=array(5,2,4,9,5,3);
	//$c=array(array())
	
	$d=array_unique(array_merge($a,$b));
	
	print_r($d);
	echo "<pre>";
	
?>
<form action="" method="POST" enctype="multipart/form-data">
name:<input type="text" name="name">
photo:<input type="file" name="image">
<input type="submit" name="submit" value="submit">
</form>
<?php
$h = dechex(ord('a'));

echo $h;
		$name=$_POST['name'];
		$file=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
	if(move_uploaded_file($tempname,"../recall/".$file)){
		echo "file uploaded";
	}else{
		echo "not upload";
	}
////////////////////////////////////////////////////////////////
$upper=array("A"=>65, "B"=>66, "C"=>67, "D"=>68, "E"=>69, "F"=>70, "G"=>71, "H"=>72, "I"=>73, "J"=>74, "K"=>75, "L"=>76, "M"=>77, "N"=>78, "O"=>79, "P"=>80, "Q"=>81, "R"=>82, "S"=>83, "T"=>84, "U"=>85, "V"=>86, "W"=>87, "X"=>88, "Y"=>89, "Z"=>90,);

$lower=array("a"=>97, "b"=>98, "c"=>99, "d"=>100, "e"=>101, "f"=>102, "g"=>103, "h"=>104, "i"=>105, "j"=>106, "k"=>107, "l"=>108, "m"=>109, "n"=>110, "o"=>111, "p"=>112, "q"=>113, "r"=>114, "s"=>115, "t"=>116, "u"=>117, "v"=>118, "w"=>119, "x"=>120, "y"=>121, "z"=>122 );



$str="Helo";
$p=0;
while($str[$p]!=false){
   echo $str[$p]."=>".$upper[$str[$p]]."<br>";
  $p++;
  
  
}	

?>