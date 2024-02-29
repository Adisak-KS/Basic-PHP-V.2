<?php
    class Employee{
        private $name;
        private $department;
        private $salary;

        // การนิยาม
        function __construct($name, $department, $salary){
            // echo "Create Object <br>";
            $this->name = $name;
            $this->department = $department;
            $this->salary = $salary;
        }


        public function setName($name){
            $this->name = $name;
        }

        public function setDepartment($department){
            $this->department = $department;
        }

        public function setSalary($salary){
            $this->salary = $salary;
        }

        public function showData(){
            echo "Name : " . $this->name . "<br>";
            echo "Department : " . $this->department . "<br>";
            echo "Salary : " . $this->salary . "<br>";
            echo "<hr>";
        }
} // End Class
