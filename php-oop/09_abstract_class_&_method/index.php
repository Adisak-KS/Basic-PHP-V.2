<?php

    require_once "accounting.php";
    require_once "programmer.php";
    require_once "sale.php";

    // Create Object
    $emp1 = new Accounting("Jane", 20000);
    $emp1->showData();
    $emp1->description();

    $emp2 = new Programmer("Adisak", 50000);
    $emp2 ->setSalary(20000);
    $emp2->showData();
    $emp2->description();

    $emp3 = new Sale("Jojo", 80000);
    $emp3->showData();
    $emp3->description();

?>