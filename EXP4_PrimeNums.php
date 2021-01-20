
<?php 

function primeCheck($number){ 
	if ($number == 1) 
	return 0; 
	
	for ($i = 2; $i * $i <= $number; $i++){ 
		if ($number % $i == 0) 
			return 0; 
	} 
	return 1; 
} 


echo "Prime numbers between 1 to 50 are : ";
for ($i = 2;  $i <= 50; $i++){ 
$flag = primeCheck($i); 	
	
if ($flag == 1){ 
        echo "		";
	echo $i."  ";
}
}
?> 

