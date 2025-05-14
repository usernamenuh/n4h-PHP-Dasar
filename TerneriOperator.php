<?php 

$hi = null;
$gender = "Wanita";

if ($gender == "Pria") {
    $hi = "Hi Bro";
} else{
    $hi = "Hi Nona";
}
echo $hi . PHP_EOL;


$hi = $gender == "Pria" ? "Hi Bro " : "Hi Nona";
echo $hi . PHP_EOL;
?>