<?php 
// Operator And,Or, not, dan xor
// Operator logika digunakan untuk menggabungkan beberapa ekspresi kondisi
var_dump(true &&  true); // true jika $a dan $b true
var_dump(true && false); // true jika $a dan $b false
echo "\n";
var_dump(true ||  true); // true jika $a dan $b salah satu atau keduanya true
var_dump(true || false); // true jika $a dan $b salah satu atau keduanya true
echo "\n";
var_dump(!true); // true jika $a tidak true
echo "\n";
var_dump(true xor true); // true jika $a atau $b true, tapi tidak keduanya
var_dump(true xor false); // true jika $a atau $b true, tapi tidak keduanya

?>