<?php 
Define("FACTOR", 9/5);
Define("OFSET", 32);

echo "Enter Your Tempareture: ";
// $tempareture = (int) readline();
$tempareture = readline();

if(is_int($tempareture)){
        echo "Which tempareture do you convert: (1 For Fahrenheit, 2 For Celcius): ";
    $choice = (int) readline();

    switch($choice){
        case 1:
            $result = ($tempareture - OFSET) / FACTOR;
            echo $result;
            break;
        case 2:
            $result = ($tempareture * FACTOR) + OFSET;
            echo $result;
            break;
        default:
            echo "invalid input! please enter correct value";
    }
}else{
    echo "Wrong Input, please Enter a number";
}