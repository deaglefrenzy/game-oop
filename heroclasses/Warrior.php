<?php

use Core\Character;

class Warrior extends Character implements CanEat
{
    function __construct(
        int $playerID,
        string $name,
        int $health = 100,
        int $strength = 10,
        int $mana = 0,
        string $className = "Warrior"
    ) {
        parent::__construct($playerID, $health, $strength, $name, $mana, $className);
    }

    // function meleeAttack($char): string
    // {
    //     $char->health = $char->health - $this->strength;
    //     $action = $this->name . " melee attacks " . $char->name . " for " . $this->strength . " damage<br>";
    //     return $action;
    // }
    function meleeAttack(): string
    {
        $action = $this->name . " melee attacks for " . $this->strength . " damage";
        return $action;
    }

    function eat(int $health): void
    {
        $this->health += $health;
    }

    function poop(): void
    {
        echo "I'm done pooping";
    }

    function specialAttack(): string
    {
        return "SwordSwing";
    }
}
