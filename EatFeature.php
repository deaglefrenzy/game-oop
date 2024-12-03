<?php

interface CanEat
{
    function eat(int $health): void;
    function poop(): void;
}

function consumeCookedBeef(CanEat $character)
{
    $character->eat(100);
}

$warrior1 = new Warrior(10, "Johan");
$archer1 = new Archer(2, "Arius");

consumeCookedBeef($warrior1);
//consumeCookedBeef($archer1);
