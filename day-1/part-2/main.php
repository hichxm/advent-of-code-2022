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

    rsort($allElves);

    $topThreeElvesCalories = array_sum(array_slice($allElves, 0, 3));

    echo 'Top 3 Elves carrying the most Calories with ' . $topThreeElvesCalories . ' calories' . PHP_EOL;
}
