<?php
include 'libs/Calculator.php';

$calc = new Calculator(4, 3, 6);
$calc->setValOne(5.4);
$calc->setValTwo(0);

include 'templates/index.php';
?>
