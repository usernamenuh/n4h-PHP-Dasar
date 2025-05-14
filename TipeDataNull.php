<?php 

$nama = "Muhammad Enuh";
$nama = null;


$age = null;

echo "Name : ";
echo $nama;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($nama)); //Mengecek apakah variabel bernilai null
echo "\n";

$contoh = "gg";
unset($contoh);  //Menghapus variabel

$contoh = "hh";
$contoh = null;
var_dump(isset($contoh));
?>
