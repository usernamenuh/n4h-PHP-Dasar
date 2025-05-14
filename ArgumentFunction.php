<?php 

function sayHello($firstnames, $lastnames = "") {
    echo "Hello $firstnames $lastnames" . PHP_EOL;
}


sayHello("Budi");
sayHello("Setiawan");
sayHello("Budi", "Setiawan");

function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("200", "100");
sum(true, false);



?>