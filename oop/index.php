<?php
require("animal.php");
require("frog.php");
require("Ape.php");

$shaun = new animal("shaun");
echo $shaun->setName("shaun");
echo $shaun->getName();
echo "<br>";

echo $shaun->setLegs("2");
echo $shaun->getLegs();
echo "<br>";

echo $shaun->setColdBlooded("false");
echo $shaun->getColdBlooded();
echo "<br>";

$katak = new frog("buduk");
echo $katak->jump();
echo "<br>";

$katak = new ape("keras_akti");
echo $katak->yell();
