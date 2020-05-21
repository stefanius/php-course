<?php

$speler1 = beurt();
$speler2 = beurt();

function beurt() {
    $worp = rand(0,2);

    $opties = [
        0 => 'STEEN',
        1 => 'PAPIER',
        2 => 'SCHAAR',
    ];

    return $opties[$worp];
}

print($speler1);