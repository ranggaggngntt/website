<?php

var_dump (1 < 5);
var_dump (10 < 5);
echo "</br>";
var_dump (1 > 5);
var_dump (10 > 5);
echo "</br>";
var_dump (1 <= 5);
var_dump (10 <= 5);
echo "</br>";
var_dump (1 >= 5);
var_dump (10 >= 5);
echo "</br>";
var_dump (1 == 5);
var_dump (5 == 5);
echo "</br>";
var_dump (1 != 5);
var_dump (5 != 5);
echo "</br>";

var_dump (1 === 5);
var_dump (1 === "1");
var_dump (5 === 5);
echo "</br>"; 
var_dump (1 !== 5);
var_dump (1 !== "1");
var_dump (5 !== 5);

echo "</br>";
$x = 10;
echo var_dump ($x < 20 && $x % 2 == 0) . "</br>";
echo var_dump ($x < 20 && $x % 2 == 0);
$x = 30;
echo var_dump ($x < 20 && $x % 2 == 0) . "</br>";
$x = 10;
echo var_dump ($x < 20 || $x % 2 == 0);
$x = 35;
echo var_dump ($x < 20 || $x % 2 == 0) . "</br>";
?>