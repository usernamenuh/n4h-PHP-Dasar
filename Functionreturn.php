<?php 

function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

$result = sum(100, 100);
var_dump($result);

function getfinalnilai(int $value): string  //kembalikan data
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$valu = getfinalnilai(90);
var_dump($valu);
?>