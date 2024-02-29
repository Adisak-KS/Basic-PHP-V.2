
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
            echo "Name : ". $this->name ."<br>";
            echo "Department : ". $this->department ."<br>";
            echo "Salary : ". $this->salary ."<br>";
            echo "<hr>";
        }

    } // End Class

    
    // Create Object
    $emp1 = new Employee("Jane", "Accounting",20000);
    // $emp1->setName("Jane");
    // $emp1->setDepartment("Accounting");
    // $emp1->setSalary(20000);
    $emp1->showData();

    $emp2 = new Employee("Adisak", "IT", 50000);
    // $emp2->setName("Adisak");
    // $emp2->setDepartment("IT");
    // $emp2->setSalary(15000);
    $emp2->showData();

?>