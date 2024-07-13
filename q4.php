<?php

$array = [
    rand(0, 100),
    rand(0, 100),
    rand(0, 100),
    rand(0, 100),
    rand(0, 100),
];

function getSecondLargest($array) {
    rsort($array);
    return $array[1];
}

echo "Array: " . implode(", ", $array) . "\n";
echo getSecondLargest($array);