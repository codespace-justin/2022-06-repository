<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

$generator = new ComputerPasswordGenerator();

$generator
  ->setUppercase()
  ->setLowercase()
  ->setNumbers()
  ->setSymbols(false)
  ->setLength(12);

$password = $generator->generatePasswords(10);


foreach ($password as $pass) {

  echo $pass . "<br>";

}