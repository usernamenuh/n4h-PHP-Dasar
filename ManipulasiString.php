<?php

$nama = "Muhammad Enuh";

echo "Nama : " . $nama . PHP_EOL;
echo "Nilai : " . 100 . PHP_EOL;


$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFLoat = (float)"11.22";
var_dump($valueFLoat);

$name = "Eko";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "Hello  $name, Selamat Belajar PHP" . PHP_EOL;
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;

$var = "var";
echo "This is {$var}s" . PHP_EOL;
?>