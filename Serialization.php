<?php
    $arr = array ("Akash",136, array(99,99,99),"TYCO");
    print_r($arr);
    echo "<br><br>";

    $ser = serialize($arr);
    echo $ser;
    echo "<br><br>";


    $unser = unserialize($ser);
    print_r($unser);
    echo "<br><br>";

?>