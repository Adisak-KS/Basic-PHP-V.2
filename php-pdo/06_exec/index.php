<?php
    // เชื่อมต่อฐานข้อมูล
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";

    try{
        $obj = new PDO($dsn, $username, $password);
        // การบันทึกข้อมูล
        $sql = "INSERT INTO employees (fname, age, department) VALUES ('อดิศักดิ์', 22, 'IT')";
        $result = $obj->exec($sql);
        if($result){
            echo "บันทึกข้อมูลเรียบร้อย";
        }
    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>