<?php
    $arr = array(01,82,39,28,82,90);
    $arr1 = array(82,82,72,90,01,34);

    $a1 = array_diff($arr,$arr1);
    print_r($a1);
    echo "<br><br><br><br>";


    $a=array_chunk($arr,2,true);
    print_r($a);
    echo "<br><br><br><br>";
    
    
?>