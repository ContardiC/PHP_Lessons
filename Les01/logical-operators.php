<?php
    $firstCondition=true;
    $secondCondition=false;
    //Logical operators
    $result=$firstCondition && $secondCondition;
    echo "AND: $result <br>";
    $result=$firstCondition || $secondCondition;
    echo "OR: $result <br>";
    $result=!$firstCondition;
    echo "NOT: $result <br>";
    $result=$firstCondition xor $secondCondition;
    echo "XOR: $result <br>";

    if($firstCondition === $secondCondition){
        
    }
    
?>