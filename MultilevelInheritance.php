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
    protected function disp1()
       {
           echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Hi";
       }
   }

   class demo2 extends demo1
   {
       function disp2()
       {
            // $this->disp1();
           echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>GoodBye.";
       }
   }
   $d = new demo2();
   $d->disp();
   $d->disp1();
   $d->disp2();
?>