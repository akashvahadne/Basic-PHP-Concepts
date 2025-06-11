<?php
    class con
    {
        public $empid = 0;
        public $empname = 0;
        public $salary = 0;

        function __construct($id,$name,$sal)
        {
            $this->empid = $id;
            $this->empname = $name;
            $this->salary = $sal;
        }

        function disp()
        {
            echo "Emp Id = ".$this->empid;
            echo "<br>Emp Name = ".$this->empname;
            echo "<br>Emp Salary = ".$this->salary."<br><br><br>";
        }
        

    }
    $obj = new con(136,"Akash Vahadne",500000);
    $obj->disp();

    $obj1 = new con(130,"Amol Bhawar",100000);
    $obj1->disp();
?>