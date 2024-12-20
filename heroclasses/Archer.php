<?php

use Core\Character;

class Archer extends Character
{
    function __construct(
        int $playerID,
        string $name,
        int $health = 100,
        int $strength = 10,
        int $mana = 0,
        string $className = "Archer"
    ) {
        parent::__construct($playerID, $health, $strength, $name, $mana, $className);
    }

    function levelUp(): string
    {
        $this->mana += 80;
        return parent::levelUp();
    }

    // function rangedAttack($char): string
    // {
    //     $char->health = $char->health - $this->strength;
    //     $action = $this->name . " range attacks " . $char->name . " for " . $this->strength . " damage<br>";
    //     return $action;
    // }
    function rangedAttack(): string
    {
        $action = $this->name . " range attacks for " . $this->strength . " damage";
        return $action;
    }

    function specialAttack(): string
    {
        return "ArrowBarrage";
    }
}
