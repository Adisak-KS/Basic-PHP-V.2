<?php
    $number1 = 10;
    $number2 = 0;

    try{
        if($number2 == 0){
           throw new Exception("ห้ามหารด้วย 0");
        }
        $result = $number1 / $number2;
        echo "ผลหาร : ". $result;
    }catch(Exception $e){
        echo $e->getMessage();
    }

?>