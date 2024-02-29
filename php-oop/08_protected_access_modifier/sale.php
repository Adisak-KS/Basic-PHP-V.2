<?php
    require_once "employee.php";

    class Sale extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Sale", $salary);
        }
    }
?>