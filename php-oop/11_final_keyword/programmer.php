<?php
    require_once "employee.php";
    
    class Programmer extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Programmer", $salary);
        }

        function description(){
            echo "Role : Develop Program <br>";
        }

        function getBonus(): string{
            return " 20% <br><hr>";
        }
    }
?>