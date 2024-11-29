<?php

use Core\Character;

class Warrior extends Character
{
    function __construct(
        int $playerID,
        string $name,
        int $health = 100,
        int $strength = 10,
        int $mana = 0,
        string $className = "Warrior"
    ) {
        parent::charInit($playerID, $health, $strength, $name, $mana, $className);
    }

    function castSpell($char): string
    {
        $newmana = $this->mana - 10;
        $this->mana = $newmana;
        $newhp = $char->health - $this->strength * 2;
        $char->health = $newhp;
        $action = $this->name . " casts spell on " . $char->name . " for " . $this->strength * 2 . " damage<br>";
        return $action;
    }
}
