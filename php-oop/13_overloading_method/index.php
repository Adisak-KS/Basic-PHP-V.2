<?php

    require_once "accounting.php";
    require_once "programmer.php";
    require_once "sale.php";
    require_once "company.php";


    $emp1 = new Programmer("Adisak", 50000);
    $emp1->skill("PHP", "JavaScript");

    $emp2 = new Programmer("Nut", 70000);
    $emp1->skill("PYTHON");

    $emp3 = new Programmer("Jojo", "30000");
    $emp3->skill();
?>