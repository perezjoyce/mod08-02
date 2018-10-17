
<?php 

//DATE FUNCTIONS
//http://php.net/manual/en/function.date.php
echo "Today is " . date("l") . "." . "<br>"; // Today is Wednesday.

echo "Today is " . date("F") . " " . date("d.") . "<br>"; //Today is October 17.

echo "Today is " . date("r") . "." . "<br>"; // Today is Wed, 17 Oct 2018 12:33:32 +0200.

// SINGLE VS DOUBLE QUOTE

	$teamA = "Iron Man";
	echo 'Hello $teamA'; // Hello $teamA
	echo "<br>";
	echo "Hello $teamA"; // Hello Iron Man


// READ CODE

	echo "<br>";
	echo 'Buzz Lightyear once said: "You\'re a toy!"'; // escape using forward slash \

	echo "<br>";
// CONSTANT
	// SYNTAX: define("NAME", "value"); // define function with 2 parameters
	define("PI", 3.14); // declare constant
	echo PI; // display
	// define("PI", 3.15); // error!

// ACTIVITY

	echo "<hr>";
	echo "<h3>ACTIVITY</h3>";

?>