<?php
    // เชื่อมต่อฐานข้อมูล
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "123";


    // เตรียมข้อมูล
    $fnameValue = "Duke";
    $ageValue = 27;
    $departmentValue = "Programmer";

    try{
        $obj = new PDO($dsn, $username, $password);
        // การบันทึกข้อมูล
        $sql = "INSERT INTO employees (fname, age, department) VALUES (:fname, :age, :department)";
        $stmt = $obj->prepare($sql);
        $stmt->bindParam(":fname",$fnameValue);
        $stmt->bindParam(":age",$ageValue);
        $stmt->bindParam(":department", $departmentValue);
        $stmt->execute();
        echo "บันทึกข้อมูล เรียบร้อยแล้ว";
    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>