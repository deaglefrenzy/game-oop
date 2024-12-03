<?php

use Core\Character;

class Mage extends Character
{
    function __construct(
        int $playerID,
        string $name,
        int $health = 80,
        int $strength = 3,
        int $mana = 50,
        string $className = "Mage"
    ) {
        parent::__construct($playerID, $health, $strength, $name, $mana, $className);
    }

    // function castSpell($char): string
    // {
    //     $this->mana = $this->mana - 10;
    //     $char->health = $char->health - $this->strength * 2;
    //     $action = $this->name . " casts spell on " . $char->name . " for " . $this->strength * 2 . " damage<br>";
    //     return $action;
    // }
    function castSpell(): string
    {
        $action = $this->name . " casts spell for " . $this->strength * 2 . " damage";
        return $action;
    }

    function specialAttack(): string
    {
        return "Hailstorm Attack";
    }
}

// class CSVRepository {
//     function getCharacters(): array {

//     }
// }

// $repository = new CSVRepository();
// $characters = $repository->getCharacters();
