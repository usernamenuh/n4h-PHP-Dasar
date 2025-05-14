<?php 

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Joko", "Budi", "Rudi"];
var_dump($names);


$values[3]; //Mengakses array ke-4
var_dump($values[3]);

$values[0] = "Samsung"; //Mengubah nilai array 
echo $values[0];
echo "\n";
var_dump($values[0]);

$values[] = "Apple"; //menambahkan nilai array
var_dump($values[4]);

var_dump(count($values)); //Menghitung jumlah array

$budi = array(
    "id" => "B001",
    "name" => "Budi",
    "age" => 17
);

$juga = [
"id" => "B002",
"name" => "Juga",
"age" => 18
];

$vivo = array(
    "id" => "B003",
    "name" => "Vivo",
    "age" => 19,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
);

var_dump($juga);

var_dump($budi); //Array Assosiatif
var_dump($budi["age"]); //Mengakses nilai array assosiatif
var_dump($vivo["address"]["city"]); //Mengakses array dalam array
?>


unset($values[1]); //Menghapus nilai array
var_dump($values)[1];