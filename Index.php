<?php

require 'Class.php';

//1
$myTest = new Test('Paulius');

//2
$myTest->dayToday();

//3
print_r($_COOKIE);

//4
$myTest->isEven(2);

//6
$myTest->setLanguage("Poland");

echo $myTest->language;

//7
print_r($myTest->discount([1,2,3,4,5,6]));

//8
$myTest->storeRandom();

//9
echo $myTest->glueText('vienas du trys keturi penki');


//10
print_r($myTest->textGen(['MacBook', 'iMac', 'iPhone', 'AppleTV', 'Macbook Pro']));

