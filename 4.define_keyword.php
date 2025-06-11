/*
define(name, value, case-insensitive)  
name: It specifies the constant name.
value: It specifies the constant value.
case-insensitive: Specifies whether a constant is case-insensitive.
 Default value is false. It means it is case sensitive by default.
 */

<?php  
echo "<br><br>";
echo "<br><br>";
define("MESSAGE","Welcome to PHP Programming");  
echo MESSAGE;  
echo "<br><br>";

define("MESSAGE1","Welcome to PHP Programming",true);//not case sensitive    
echo MESSAGE1. "<br><br>";    
echo message1;    
?>  