<?php

    require_once "accounting.php";
    require_once "programmer.php";
    require_once "sale.php";


    $emp1 = new Programmer("Adisak", 50000, 5);
    $emp1->showData();
    $emp2 = new Accounting("Nut", 70000);
    $emp2->showData();
    $emp3 = new Sale("Jojo", 30000, "BKK");
    $emp3->showData();

?>