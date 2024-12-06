<?php
echo "Enter Your Unit: ";
$unit = (int)readline();

if($unit <= 100){
    $bill = $unit * 5;
}elseif($unit <= 200){
    $bill = 100 * 5 + ($unit - 100) * 10;
}else{
    $bill = 100 * 5 + 100 * 10 + ($unit - 200) * 15;
}

echo " Total bill is: $bill \n";

// with vat (extra work)
    // $vat = 0.1; // 10%
    // $total_bill = $bill + $bill * $vat;
    // echo " Total bill with vat: $total_bill";