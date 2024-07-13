<?php

$arr = ["Merah", "Kuning", "Hijau"];

function rambu() {
    global $arr;
    global $index;
    $index++;
    if ($index > count($arr)) {
        $index = 1;
    }
    return $arr[$index - 1];
}

for ($i = 0; $i < 10; $i++) {
    echo $i+1 . ". " . rambu() . "\n";
}