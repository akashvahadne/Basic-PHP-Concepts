/*
PHP $ and $$ Variables
The $var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.

The $$var (double dollar) is a reference variable that stores the value of the $variable inside it.
To understand the difference better, let's see some examples.



*/

<?php  
echo "<br><br><br>";  
echo "---Example 1---<br>";
$x = "spark";  
$$x = 500;  
echo $x."<br/>";  
echo $$x."<br/>";  
echo $spark;  


echo "<br><br><br>";  
echo "---Example 2--- <br>";
$a="U.P";  
$$a="Lucknow";  
echo $a. "<br>";  
echo $$a. "<br>";  
echo "Capital of $a is " . $$a;    
?>  