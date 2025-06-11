/*
Here we have to use multiple if else conditions however using “<=>” spaceship operator we can achieve that within one line.
The syntax of the spaceship operator is

var1 <=> var2
The result of the comparison will be:

-1 if var1 is less than var2,
0 if var1 is equal to var2
1 if var1 is greater than var2.
The spaceship operator is particularly useful when sorting arrays or for comparing two values without the need for multiple conditional statements. It simplifies the code and makes it more concise.
*/

<?php
  echo "<br><br>";
  $a = 51;
  $b = 50; 
  $result = $a <=> $b; 
  echo $result;

  echo "<br><br>";
  $a1 = 51;
  $b1 = 51; 
  $result1 = $a1 <=> $b1; 
  echo $result1;

  echo "<br><br>";
  $a2 = 51;
  $b2 = 52; 
  $result2 = $a2 <=> $b2; 
  echo $result2;
?>