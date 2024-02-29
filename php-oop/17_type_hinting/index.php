<?php
    require_once "employee.php";


    $emp1 = new Employee("Adisak", "Owner", 100000);
    $emp2 = new Employee("Luknam", "Secretary", 50000);
    $emp3 = new Employee("Jojo", "Graphic", 30000);

    showEmployee($emp1);
    showEmployee($emp2);
    showEmployee($emp3);

    function showEmployee(Employee $obj){
        echo "---- Employees Data ----<br>";
        echo "Name : ". $obj->name ."<br>";
        echo "Department : ". $obj->department ."<br>";
        echo "Salary : ". $obj->salary ."<br>";
    }

?>