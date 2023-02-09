<?php

require_once "Point.php";

$p1= new Point(2,2);

echo $p1->distanceFromOrigin();
echo "<hr>";

$p1->translate(1,3);
echo $p1->getX();
echo $p1->getY();
echo "<hr>";

echo $p1;
echo "<hr>";

echo $p1->distance(5,8);
echo "<hr>";

echo $p1->getX();
echo $p1->getY()."<br>";
$p1->setLocation(10,15)."<br>";
echo $p1->getX();
echo $p1->getY();


