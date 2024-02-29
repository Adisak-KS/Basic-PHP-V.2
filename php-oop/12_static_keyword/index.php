<?php

    require_once "accounting.php";
    require_once "programmer.php";
    require_once "sale.php";
    require_once "company.php";

    // $company = new Company();
    echo Company::$companyName . "<br>";
    Company::info() ;

    // Create Object
    $emp1 = new Accounting("Jane", 20000);
    $emp1->showData();
    $emp1->description();
    echo "Bonus : ". $emp1->getBonus();

    $emp2 = new Programmer("Adisak", 50000);
    $emp2->setSalary(20000);
    $emp2->showData();
    $emp2->description();
    $emp2->getBonus();
    echo "Bonus : ". $emp2->getBonus();

    $emp3 = new Sale("Jojo", 80000);
    $emp3->showData();
    $emp3->description();
    $emp3->getBonus();
    echo "Bonus : ". $emp3->getBonus();

    
?>