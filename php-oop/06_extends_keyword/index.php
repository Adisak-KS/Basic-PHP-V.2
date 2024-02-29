<?php

    require_once "accounting.php";
    require_once "programmer.php";

    // Create Object
    $emp1 = new Accounting("Jane", "Accounting",20000);
    $emp1->setSalary(80000);
    $emp1->showData();

    $emp2 = new Programmer("Adisak", "Programmer", 50000);
    $emp2->showData();

?>