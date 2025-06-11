<?php
    class demo
    {
        public $len = 20;
        public $wid = 30;
        public $rad = 40;

        function rectange()
        {
            return $this->len*$this->wid;
        }
        function circle()
        {
            return 3.14*$this->rad*$this->rad;
        }
    }
    $obj = new demo();
    echo "Area of Rectange = ",$obj->rectange(),"<br>";
    echo "Area of Circle = ",$obj->circle();
?>