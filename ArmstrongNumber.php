<?php
    $n=153;
    $n1=$n;
    $s=0;
    while($n>=1)
    {
        $r=$n%10;
        $s=$s+($r*$r*$r);
        $n=$n/10;
    }
    if($s==$n1)
    {
        echo "No is Armstrong";
    }
    else
    {
        echo"Not an Armstrong Number";
    }
?>