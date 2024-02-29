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
        $arr = $result->fetchAll(PDO::FETCH_ASSOC);
        print_r($arr);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>