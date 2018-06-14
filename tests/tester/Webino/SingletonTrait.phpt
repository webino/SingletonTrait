<?php

use Tester\Assert;
use Webino\SingletonTrait;

require '../bootstrap.php';


class TestSingleton
{
    use SingletonTrait;
}


$objA = TestSingleton::getInstance();
$objB = TestSingleton::getInstance();


Assert::same($objA, $objB);
