<?php
	
	$sum=0;
	$summ=0;
	function sum1($a,$b){
		sum2($c,$d);
		$sum=$a+$b;
		echo $sum;
	}
	function sum2($c,$d){
		sum1($a,$b);
		$summ=$c+$d;
	 echo $summ;
	
	}
	sum1(6,8);
	sum2(6,8);
	
?>