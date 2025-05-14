<?php 

var_dump(1234 == "1234"); // true jika $a sama dengan $b setelah dilakukan konversi tipe data
var_dump(1234 === "1234"); // true jika $a sama dengan $b dan memiliki tipe data yang sama

var_dump(1234 != "1234"); // true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
var_dump(1234 <> "1234"); // true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
var_dump(1234 !== "1234"); // true jika $a tidak sama dengan $b atau tipe datanya tidak sama
echo "\n";
var_dump(9 < 10); // true jika $a kurang dari $b
var_dump(9 > 10); // true jika $a lebih dari $b
var_dump(9 <= 10); // true jika $a kurang dari atau sama dengan $b
var_dump(9 >= 10); // true jika $a lebih dari atau sama dengan $b

?>