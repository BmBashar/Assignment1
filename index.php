<?php 

$num1 =4;
$num2 =43;
$num3 =6;

if ($num1 > $num2){
    if ( $num1 > $num3){
        echo "The Largest Number Is: $num1";
    }
        else{
            echo "The Largest Number Is: $num3";
        }
}
 if ($num2 > $num1){
    if ( $num2 > $num3){
        echo "The Largest Number Is: $num2";
    }
    else {
        echo "The Largest Number Is: $num3";
    }
 }