<?php
    require_once "employee.php";

    class Sale extends Employee{
        private $area;
        function __construct($name, $salary, $area){
            $this->area = $area;
            parent::__construct($name, "Sale", $salary);
        }
        
        function description(){
            echo "Role : Sale Program <br>";
        }
        function getBonus(): string{
            return " 15% <br><hr>";
        }

        public function showData(){
            echo "Name : " . $this->name . "<br>";
            echo "Department : " . $this->department . "<br>";
            echo "Salary : " . $this->salary . "<br>";
            echo "Area : " . $this->area . "<br>";
            echo "<hr>";
        }
    }
?>