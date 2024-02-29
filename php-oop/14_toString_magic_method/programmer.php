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

        /*
        // รูปแบบที่ 1
        function skill($args){
            echo "skill : ". $args ."<br>";
        }

        
        // รูปแบบที่ 2
        function skill($args1, $args2){
            echo "skill : ". $args1 .",". $args2 ."<br>";
        }
        */

        // Overloading Method
        function __call($name, $args){
            if($name == "skill"){
                $c = count($args); // นับจำนวน arguments
                switch($c){
                    case 1:
                        echo "skill : ". $args[0] ."<br>";
                        break;
                    case 2:
                        echo "skill : ". $args[0].", ". $args[1] ."<br>";
                        break;
                    case 3:
                        echo "skill : ". $args[0].", ". $args[1].", ". $args[2]  ."<br>";
                        break;
                    default:
                        echo "Not Found";
                        break;
                }
            }
        }

        function __toString():string{
            return "Name Programer : ". $this->name . " Salary : " .$this->salary ."<br>";
        }
    }
?>