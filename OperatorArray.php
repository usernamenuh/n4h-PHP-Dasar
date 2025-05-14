<?php 

$ini = [
 "Nama" => "Muhammad Enuh"
];

$itu = [
 "Umur" => 20
];

var_dump($ini + $itu); // Menggabungkan Array 1 dan Array 2

$saya = [
 "Nama" => "Muhammad Enuh",
 "Umur" => 20
];

$anda = [
 "Umur" => 20,
 "Nama" => "Muhammad Enuh"
];

var_dump($saya == $anda); // true jika $saya sama dengan $anda
var_dump($saya === $anda); // false jika $saya tidak sama dengan $anda

$op = [
 "Nama" => "Muhammad Enuh",
 "Umur" => 20
];

$og = [
 "Nama" => "Muhammad Enuh",
 "Umur" => 20
];

var_dump($op != $og); // true jika $op tidak sama dengan $og
var_dump($op <> $og); // true jika $op tidak sama dengan $og setelah dilakukan konversi tipe data
var_dump($op !== $og); // true jika $a tidak sama dengan $b atau tipe datanya tidak sama
?>