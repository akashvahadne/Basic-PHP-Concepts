<?php
    class employee
    {
        public $empid = 0;
        public $empname = 0;
        public $salary = 0;

        function accept($a,$b,$c)
        {
            $this->empid = $a;
            $this->empname = $b;
            $this->salary = $c;
        }

        function disp()
        {
            echo "Emp Id = ".$this->empid;
            echo "<br>Emp Name = ".$this->empname;
            echo "<br>Emp Salary = ".$this->salary."<br><br><br>";
        }
    }
    $obj = new employee();
    $obj1 = new employee();
    $obj->accept("avahadne2004@gmail.com","Akash Sanjiv Vahadne",500000);
    $obj->disp();
    $obj1->accept("abhawar2004@gmail.com","Amol Gopal Bhawar",1000000);
    $obj1->disp();

    if($obj->salary>$obj1->salary)
    {
        echo "Salary of Akash is greater";
    }
    else{
        echo "Salary of Amol is greater";
    }
?>