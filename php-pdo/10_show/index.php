<?php
    // เชื่อมต่อฐานข้อมูล
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";


    // เตรียมข้อมูล
    $fnameValue = "นัท";
    $ageValue = 17;
    $departmentValue = "ฝ่ายการเงิน";

    try{
        $obj = new PDO($dsn, $username, $password);
        $sql = "SELECT * FROM employees";
        $result = $obj->query($sql);
        while( $row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "ID : ". $row["id"] ."<br>";
            echo "Name : ". $row["fname"] ."<br>";
            echo "Age : ". $row["age"] ."<br>";
            echo "Department : ". $row["department"] ."<br>";
            echo "<hr>";
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>