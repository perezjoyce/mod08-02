<?php 

echo "<h3>2. Team up two persons with two animals</h3>";

$colors = array("Blue", "Orange", "Fuchsia");
$animals = array("Barracudas", "Pandas", "Hamster");
$people = array("Kevin", "Michael", "Paula", "Edison", "Nica", "Drei");

echo "<br>";

echo "<strong>Team 1: </strong>" . $colors[0] . " " . $animals[0] . "<br>";
echo "<strong>Members: </strong>" . $people[0] . ", " . $people[1];

echo "<br>" . "<br>";

echo "<strong>Team 2: </strong>" . $colors[1] . " " . $animals[1] . "<br>";
echo "<strong>Members: </strong>" . $people[2] . ", " . $people[3];

echo "<br>" . "<br>";

echo "<strong>Team 3: </strong>" . $colors[2] . " " . $animals[2] . "<br>";
echo "<strong>Members: </strong>" . $people[4] . ", " . $people[5];

echo "<hr>";

// 

echo "<strong>LOOPED VERSION</strong>";
echo "<br>" . "<br>";

$colors2 = array("Blue", "Orange", "Fuchsia");
$animals2 = array("Barracudas", "Pandas", "Hamster");
$people2 = array("Kevin, Michael", "Paula, Edison", "Nica, Drei");

for($i = 0; $i < 3; $i++) {
 	$text1 = "<strong>Team: </strong>";
 	$text2 = "<strong>Members: </strong>";
 	
	echo "$text1" . ($colors2[$i]) . " " . ($animals2[$i]) . "<br>";
	echo "$text2" . ($people2[$i]) . "<br><br>";

 }

?>