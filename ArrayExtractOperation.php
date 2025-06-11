<?php
$course["CE"] = "Civil Engg";
$course["CO"] = "Computer Engg";
$course["EE"] = "Electrical Engg";
$course["EJ"] = "Electronics & Tele. Comm";
$course["ME"] = "Mechanical Engg";
// echo $course["EJ"];
extract($course);
echo "1-$CE <br>";
echo "2-$CO <br>";
echo "3-$EE <br>";
echo "4-$EJ <br>";
echo "5-$ME <br>";
?>