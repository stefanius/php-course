<?php

$speler1 = $argv[1];
// $speler1 = beurt();
$speler2 = beurt();

print(uitslag($speler1, $speler2) .  "\r\n");

print("-------------------------" .  "\r\n");
print("speler 1: " . $speler1 . "\r\n");
print("speler 2: " . $speler2 .  "\r\n");

function beurt() {
    $worp = rand(0,2);

    $opties = [
        0 => 'STEEN',
        1 => 'PAPIER',
        2 => 'SCHAAR',
    ];

    return $opties[$worp];
}

function uitslag($speler1, $speler2) {
    if ($speler1 === $speler2) {
        return "GELIJKSPEL";
    }

    if (
        ($speler1 === "STEEN" && $speler2 === "PAPIER") ||
        ($speler1 === "PAPIER" && $speler2 === "SCHAAR") ||
        ($speler1 === "SCHAAR" && $speler2 === "STEEN")
        ) {
        return "SPELER 2 WINT";
    }

    return "SPELER 1 WINT";
}
