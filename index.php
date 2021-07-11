<?php

require_once 'Classes\Complex.php';

use Classes\Complex\Complex;

//for example
$a = 5;
$b = 10;

$complex = new Complex($a, $b);

$complex->addition();
echo $complex;
$complex->subtraction();
echo $complex;
$complex->multiplication();
echo $complex;
$complex->division();
echo $complex;
