<?php

// when we used constant variable then
    const number = 12;
    if(number > 0){
        echo "The Number is Positive";
    }elseif(number < 0){
        echo "The Number Is Negative ";
    }else{
        echo "The Number Is Zero";
    }

    
// input a number through the terminal
    echo " Enter The Number: ";
    $num = (int) readline();

    if($num > 0){
        echo "The Number is Positive";
    }elseif($num < 0){
        echo "The Number Is Negative ";
    }else{
        echo "The Number Is Zero";
    }