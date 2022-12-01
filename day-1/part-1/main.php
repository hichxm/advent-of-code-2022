<?php

$handle = fopen("input", "r");

if ($handle) {
    $allElves = [];
    $currentElf = 0;

    while (($line = fgets($handle)) !== false) {
        $number = trim($line);

        if ($number) {
            $currentElf = $currentElf + $line;
        } else {
            echo 'Elf with ' . $currentElf . ' calories' . PHP_EOL;

            $allElves[] = $currentElf;
            $currentElf = 0;
        }
    }

    fclose($handle);

    $max = max(...$allElves);

    echo 'Elf carrying the most Calories with ' . $max . ' calories' . PHP_EOL;
}
