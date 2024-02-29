<?php

    require_once "accounting.php";
    require_once "programmer.php";
    require_once "sale.php";
    require_once "company.php";


    $emp1 = new Programmer("Adisak", 50000);
    echo $emp1;
    $emp2 = new Programmer("Nut", 70000);
    echo $emp2;
    $emp3 = new Programmer("Jojo", 30000);

?>