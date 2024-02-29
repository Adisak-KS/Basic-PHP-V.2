<?php
    require_once "employee.php";
    require_once "office.php";
    require_once "company.php";
    
    class Programmer extends Employee implements Office, Company{

        private $exp;
        function __construct($name, $salary, $exp){
            $this->exp = $exp;
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

        public function showData(){
            echo "Name : " . $this->name . "<br>";
            echo "Department : " . $this->department . "<br>";
            echo "Salary : " . $this->salary . "<br>";
            echo "Exp : " . $this->exp . "<br>";
        }

        public function officeName($name){
            echo "Office Name : ". $name ."<br>";
        }
        public function setWorking($work):string{
            return "Work Type : ". $work ."<br>";
        }

        public function setCompanyName($name){
            
        }
    }
?>