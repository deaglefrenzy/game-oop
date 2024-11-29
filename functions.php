<?php

use Core\Character;

function simulateBattle($char1, $char2): string
{
    while (($char1->health > 0) && ($char2->health > 0)) {
        echo Character::attack($char2, $char1);
        echo Character::attack($char1, $char2);
    }
    if ($char1->health <= 0) {
        $kalah = $char1->name;
        $menang = $char2->name;
    } else {
        $kalah = $char2->name;
        $menang = $char1->name;
    }
    $action = $kalah . " has died. " . $menang . " won the battle.";
    return $action;
}

function charStatus($char): string
{
    $status = "<font style='font-size:20px; font-weight:bold;'>" . $char->name . "</font> ";
    $status .= "HP: " . $char->health . ", ";
    $status .= "STR: " . $char->strength . ", ";
    $status .= "MANA: " . $char->mana;
    $status .= "<br><br>";
    return $status;
}

function populate()
{
    $names = [
        'Aelric',
        'Branwen',
        'Caelum',
        'Dain',
        'Eira',
        'Fendrel',
        'Galen',
        'Halia',
        'Ivor',
        'Jareth',
        'Kael',
        'Lira',
        'Maelis',
        'Niamh',
        'Orin',
        'Pyrra',
        'Quinn',
        'Ronan',
        'Sylas',
        'Talia',
        'Ulric',
        'Vanya',
        'Wren',
        'Xander',
        'Yara',
        'Zara'
    ];
    $classes = ['Warrior', 'Mage', 'Archer'];

    $players = [];
    for ($i = 1; $i <= 100; $i++) {
        $players[] = [
            'playerId' => $i,
            'name' => $names[array_rand($names)], // Random name
            'health' => rand(10, 100), // Random health
            'strength' => rand(5, 20),
            'mana' => rand(0, 50), // Random strength
            'className' => $classes[array_rand($classes)], // Random class
        ];
    }
}
