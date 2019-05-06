<?php
/*
 * 1.User enters number #1(1and 10000e)
 * 2.User picks an operator(-,+,*,/)
 * 3.User enters number #2(1 and 10000e)
 * 4.User pushes=sign
 */
#Step1
$number1=$_GET['number1']??5;
#Step2
$operator=$_GET['operator']??'+';
#step3
$number2=$_GET['number2']??5;
$result='empty';

$result=eval($number1.$operator.$number2);
if($operator=='x'){
    $result=$number1*$number2;
}
if($operator=='plus'){
    $result=$number1*$number2;
}
if($operator=='minus'){
    $result=$number1*$number2;
}
echo $result;

