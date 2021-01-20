<?php 
        $array1 = array(1,12,89,99,23);
	echo "Array 1 is ";
	for($i =0; $i< 5; $i++){
		echo $array1[$i]." ";
	}
	echo "<br>";
	echo "<br>";
	$array2 = array(67,34,190,77,56);
	echo "Array 2 is ";
	for($j =0; $j< 5; $j++){
		echo $array2[$j]." ";
	}
	$array1_2 = array_merge($array1,$array2);
	rsort($array1_2);
	echo "<br>";
	echo "<br>";
	echo "After Merging array1 and array2  the decreasing order is: ";
	$l = count($array1_2);
	for($k =0; $k< $l; $k++){
		echo $array1_2[$k]." ";
	}
?>		
