<?php
    require_once "employee.php";
    
    class Accounting extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Accounting", $salary);
        }

        function description(){
           echo "Role : Manage Payroll, Tex <br><hr>" ;
        }
    }
?>