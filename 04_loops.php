<?php 
    // for loop
    /*for($i = 0; $i < 10; $i++){
        echo $i . '<br>';
    }*/

    //while loop
    /*$i = 0;
    while($i <= 20){
        echo $i . '<br>';
        $i++;
    }*/

    // do while loop
    /*
    $i = 0;
    do{
        echo $i . '<br>';
        $i++;
    }while($i <= 5);
    */

    //foreach loop
    /*$number = [10, 20, 30, 40, 50];
    foreach($number as $i){
        echo $i . "\n\n";
    }*/

    $number = [10, 20, 30, 40, 50];
    foreach($number as $index => $value){
        echo "${index} --> ${value}" . "<br>";
    }
?>