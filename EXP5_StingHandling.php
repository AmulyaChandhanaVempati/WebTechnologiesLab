<br><br><br>
<form action = "">
Enter String : <input type = "text" name = "str"><br><br>
Enter a substring to check if it's in String or not : <input type = "text" name = "word"><br><br>

<input type = "submit"><br>
</form>
<?php 
error_reporting(0);
	
	
	echo "Length of the String ".$str." is  : ".strlen($_GET["str"]);
        echo "<br>";
	echo "<br>";
        echo "Word count of string ".$str." is : ".str_word_count($_GET["str"]);
        echo "<br>";
        echo "<br>";
        echo "Reverse of string ".$str." is : ".strrev($_GET["str"]);
	echo "<br>";
        echo "<br>";
        
	$word = $_GET["word"];


	if(strpos($str, $word) == true){
	    echo "Yes it has the word ".$word;
	} else{
	    echo "No string doesnot contain ",$word;
	}
?>

        
