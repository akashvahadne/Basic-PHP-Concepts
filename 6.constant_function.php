/*Constant() function
There is another way to print the value of constants using constant() function instead of using the echo statement.

Syntax

The syntax for the following constant function:

constant (name)*/


<?php   
    echo "<br><br>";
    define("MSG", "PHP Programming");  
    echo MSG, "</br>";  
    echo constant("MSG");  
    echo "<br><br>";
    //both are similar  
?>  

/*
Constant vs Variables
Constant	Variables
Once the constant is defined, it can never be redefined.	
A variable can be undefined as well as redefined easily.

A constant can only be defined using define() function. 
It cannot be defined by any simple assignment.
	A variable can be defined by simple assignment (=) operator.
There is no need to use the dollar ($) sign before constant during the assignment.
	To declare a variable, always use the dollar ($) sign before the variable.
Constants do not follow any variable scoping rules, 
and they can be defined and accessed anywhere.	
Variables can be declared anywhere in the program, but they follow variable scoping rules.
Constants are the variables whose values can't be changed throughout the program.	
The value of the variable can be changed.
By default, constants are global.	
Variables can be local, global, or static.

*/
