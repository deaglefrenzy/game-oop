<?php

namespace Core;

use Archer;
use Error;
use Mage;
use Warrior;

abstract class Character
{
    public int $playerID;
    public string $name;
    public int $health;
    public int $strength;
    public int $mana;
    public string $className;

    function __construct($playerID, $health, $strength, $name, $mana, $className)
    {
        $this->playerID = $playerID;
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->mana = $mana;
        $this->className = $className;
    }

    static function attack($char1, $char2): string
    {
        $char2->health = $char2->health - $char1->strength;
        $action = $char1->name . " attacked " . $char2->name . " for " . $char1->strength . " damage<br>";
        return $action;
    }

    function levelUp(): string
    {
        $this->health = $this->health + 20;
        $this->strength = $this->strength + 5;
        $this->mana = $this->mana + 5;

        $action = $this->name . " has levelled up!<br>";
        return $action;
    }

    static function fromCSV(array $row): Character
    {
        $heroClass = $row[5];
        if ($heroClass === "Warrior") {
            return new Warrior($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
        } else if ($heroClass === "Archer") {
            return new Archer($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
        } else if ($heroClass === "Mage") {
            return new Mage($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
        }
        dd($heroClass);
        throw new Error("Class not found", 404);
    }

    function toCSV(): string
    {
        return sprintf(
            "%s,%s,%s",
            $this->playerID,
            $this->name,
            $this->health,
        );
    }

    abstract function specialAttack(): string;

    // abstract function dance();
}
