<?php
    // indexed array
    $arr=array("apple","banana","mango","pineapple","jackfruit");


    // foreach example
    foreach($arr as $i)
    {
        echo $i." ";
    }
    echo "<br><br><br>";


    // for example
    for($i=0;$i<5;$i++)
    {
        echo $arr[$i]." ";
    }
    echo "<br><br><br>";
    

    // print_r example 
    print_r($arr);
    echo "<br><br><br>";


    // var_dump example
    var_dump($arr);
    echo "<br><br><br>";

    // Sort ascending
    sort($arr);
    print_r($arr);
    echo "<br><br><br>";

    // rsort decending
    rsort($arr);
    print_r($arr);
    echo "<br><br><br>";

    // unset method
    unset($arr[2]);
    print_r($arr);
    echo "<br><br><br>";


    // associative array
    $a= array("Akash"=>"136","Amol"=>"130","Parth"=>"125");
    foreach($a as $key =>$value)
    {
        echo $key."=> ".$value."<br>";
    }
    echo "<br><br><br>";

    // array_flip method
    $flip = array_flip($a);
    print_r($flip);
    echo "<br><br><br>";

    // asort asecending according to value
    asort($a);
    print_r($a);
    echo "<br><br><br>";

    // arsort descending according to value
    arsort($a);
    print_r($a);
    echo "<br><br><br>";

    // multi dymentional array 
    $b=array(
        array("name"=>"Akash","mob"=>"123","add"=>"kahjakjh"),
        array("name"=>"Amol","mob"=>"456","add"=>"efgukegj"),
        array("name"=>"Parth","mob"=>"789","add"=>"jhgfjfgk")
    );

    for($k=0;$k<count($b);$k++)
    {
        echo $b[$k]["add"]."<br>";
    }

    // implode method
    echo "<br><br><br>";
    $ar2= implode($arr);
    echo $ar2;

    // explode method
    echo "<br><br><br>";
    $p = "Akash Amol Rupesh Anish";
    $e = explode(" ",$p);
    print_r($e);


?>