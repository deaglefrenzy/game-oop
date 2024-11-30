<?php

namespace Core;

abstract class Character
{
    public string $name;
    public int $health;
    public int $strength;
    public int $playerID;
    public int $mana;
    public string $className;

    function charInit($playerID, $health, $strength, $name, $mana, $className)
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
}
