<?php
    class demo
    {
        function disp()
        {
            echo "Welcome!";
        }
    }
    class demo1 extends demo
    {
        function disp()
        {
            echo "<br><br><br><br>GoodBye.";
        }
    }

    $d = new demo1();
    $d->disp();
   
?>