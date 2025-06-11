

/*
Magic Constants
Magic constants are the predefined constants in PHP which get changed on the basis of their use. They start with double underscore (__) and ends with double underscore.

They are similar to other predefined constants but as they change their values with the context, they are called magic constants.

There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__).

__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__

ClassName::class
All of the constants are resolved at compile-time instead of run time, unlike the regular constant.
 Magic constants are case-insensitive.
 */

 /*
All the constants are defined below with the example code:

1. __LINE__
It returns the current line number of the file, where this constant is used.
*/
<?php   
    echo "<h3>Example for __LINE__</h3>";    
    // print Your current line number i.e;4     
    echo "You are at line number " . __LINE__ . "<br><br>";  
    echo "file " . __FILE__ . "<br><br>";  
    echo "file " . __DIR__ . "<br><br>";

?>  