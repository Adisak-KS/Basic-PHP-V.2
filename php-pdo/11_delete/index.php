<?php
    // เชื่อมต่อฐานข้อมูล
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";


    // เตรียมข้อมูล
    $id = 5;

    try{
        $obj = new PDO($dsn, $username, $password);
        $sql = "DELETE FROM employees WHERE id = ?";
        $stmt = $obj->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        echo "ลบข้อมูลเรียบร้อย";

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>