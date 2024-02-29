
<?php

    class Employee{
    public $name;
    public $department;
    } // End Class

    // Create Object
    $emp1 = new Employee();
    $emp1->name = "Jane";
    $emp1->department = "Acouting";

    echo "Name : ". $emp1->name ."<br>";
    echo "Department : ". $emp1->department ."<br>";

    $emp2 = new Employee();
    $emp2->name = "Kong";
    $emp2->department = "IT";

    echo "Name : ". $emp2->name ."<br>";
    echo "Department : ". $emp2->name ."<br>";
?>