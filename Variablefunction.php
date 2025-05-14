<?php 


function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$namefunction = "foo";
$namefunction();

$namefunction = "bar";
$namefunction();


?>