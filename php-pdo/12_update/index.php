<?php
    // เชื่อมต่อฐานข้อมูล
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";


    // เตรียมข้อมูล
    $fnameEdit = "Adison13";
    $ageEdit = 20;
    $departmentEdit = "Support";
    $id = 2;

    try{
        $obj = new PDO($dsn, $username, $password);
        $sql = "UPDATE employees SET fname = ?, age = ?, department = ? WHERE id = ?";
        $stmt = $obj->prepare($sql);
        $stmt->bindParam(1, $fnameEdit);
        $stmt->bindParam(2, $ageEdit);
        $stmt->bindParam(3,$departmentEdit);
        $stmt->bindParam(4, $id);
        $stmt->execute();
        echo "อัพเดทข้อมูล";

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>