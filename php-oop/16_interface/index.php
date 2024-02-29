<?php

    require_once "accounting.php";
    require_once "programmer.php";
    require_once "sale.php";


    $emp1 = new Programmer("Adisak", 50000, 5);
    $emp1->showData();
    $emp1->officeName("HuaHin");
    echo $emp1->setWorking("Work From Home");
    echo "<hr>";

    
    $emp2 = new Programmer("Nut", 70000, 5);
    $emp2->showData();
    $emp2->officeName("BKK");
    echo $emp2->setWorking("In office");
    echo "<hr>";

?>