<?php
require 'vendor/autoload.php';

use ComposerApp\Controller\Calculator;

$calculator = new Calculator();

echo $calculator->add(10, 20) . '<br />';
echo $calculator->subtract(30, 20) . '<br />';
echo $calculator->multiply(30, 20). '<br />';
echo $calculator->divide(30, 20);
