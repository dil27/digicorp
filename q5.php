<?php

function mostFrequentCharacter($kata) {
    $kata = strtolower($kata);
    $frequency = [];

    for ($i = 0; $i < strlen($kata); $i++) {
        $char = $kata[$i];
        if ($char !== " ") {
            if (!isset($frequency[$char])) {
                $frequency[$char] = 0;
            }
            $frequency[$char]++;
        }
    }

    $max_char = '';
    $max_count = 0;
    foreach ($frequency as $char => $count) {
        if ($count > $max_count) {
            $max_count = $count;
            $max_char = $char;
        }
    }

    return $max_char . " " . $max_count . "x";
}

$kata = "acbcccdcecfcgc";
echo "Input: $kata\n";
echo "Outpt: " . mostFrequentCharacter($kata) . "\n";