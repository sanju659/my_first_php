<?php
    /*
    function xero(){
        echo 'xero() function is called' ;
    }
    xero();
    */

    /*
    function calc($n1, $n2){
        echo "Add " . $n1 + $n2 . "<br>";
        echo "Sub " . $n1 - $n2 . "<br>";
        echo "Mul " . $n1 * $n2 . "<br>";
        echo "Div " . $n1 / $n2 . "<br>";
    }
    calc(20, 7);
    */

    function calc($n1, $n2){
        return $n1 + $n2;        
    }
    echo "Add " . calc(20, 64) . "<br>";
?>