<?php

	//echo "<pre>";print_r($_SERVER);
	/* class test{
		
		function add(){
			$a=5;
			$b=15;
			echo ($a+$b);
			echo "<br>";
		}
		function sum(){
			$a=2909;
			$b=15;
			echo ($a/$b);
		}
	
	}
	$a=new test;
	$a->add();
	$a->sum();
	 */


 class user{
			private $first=5;
			public $second=15;
			protected $third=30;
			static $four=40;
		function add(){
			//echo ($this->first+$this->third);
			echo $this->first;
			echo "<br>";
			echo $this->second;
			echo "<br>";
			echo $this->third;
			echo "<br>";
		}
		function sum(){
			$a=2909;
			$b=15;
			echo ($a/$b)."<br>";
			
		}
	
	}
	$obj=new user;
	$obj->add();
	$obj->sum();
	//$obj->first;		//cann't access private property.
	$obj->second;
	//$obj->third;		//cann't access protected property.
	
		class test extends user{
			public $first=20;
			//public $d=30;
			//public $e=20;
			
		}
		
		$abc=new test;
		echo "<pre>";
		print_r($abc);
		echo $abc->second."<br>";
		//echo $abc->first;
		//echo $abc->d;
		echo $abc::$four."<br>";
	
	
?>