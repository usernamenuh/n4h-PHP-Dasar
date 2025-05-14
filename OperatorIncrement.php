<?php 

$a = 10;
++$a; // Naikkan nilai $a sebanyak 1 lalu kembalikan $a

$b = ++$a; // Naikkan nilai $a sebanyak 1, lalu berikan ke $b
$c = $a++; // Berikan nilai $a ke $c, lalu naikkan $a sebanyak 1

var_dump($a);
var_dump($b);
var_dump($c);
?>