<?php
    require_once "employee.php";

    class Sale extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Sale", $salary);
        }
        
        function description(){
            echo "Role : Sale Program <br>";
        }
        function getBonus(): string{
            return " 15% <br><hr>";
        }
    }
?>