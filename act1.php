

<?php 
 
 echo '<h3>1. Display the "squares" of each element</h3>';

 $numbers = array(1,2,3,4,5,6,7,8,9);

 // i = $numbers[$numbers.length()];

 for($i = 0; $i < 9; $i++) {
 	$text1 = "The square of ";
 	$text2 = " is ";
 	
 	$computation = ($numbers[$i]) * ($numbers[$i]);
 	echo "$text1" . ($numbers[$i]) . "$text2" . "$computation" . "." . "<br>";
 }


?>


