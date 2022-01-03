<?php
  function doArithmathicOperations($num1,$num2){
	$sum=  $num1+$num2;
	echo $num1." + ".$num2." = ".$sum."</br>";
	$sub=  $num1-$num2;
	echo $num1." - ".$num2." = ".$sub."</br>";
	$m=  $num1* $num2;
	echo $num1." * ".$num2." = ".$m."</br>";
	$sum=  $num1/$num2;
	echo $num1." / ".$num2." = ".$sum."</br>";
  }
  
  echo"Output" ."</br>";
   doArithmathicOperations(20,5);
?>  