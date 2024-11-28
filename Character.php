<?php

namespace Core;

class Character
{
    public string $name;
    public int $health;
    public int $strength;

    function __construct(
        string $name,
        int $health = 100,
        int $strength = 10,
    ) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
    }

    function charStatus(): string
    {
        $status = "<font style='font-size:20px; font-weight:bold;'>" . $this->name . "</font> ";
        $status .= "HP: " . $this->health . ", ";
        $status .= "STR: " . $this->strength;
        $status .= "<br><br>";
        return $status;
    }

    static function attack($char1, $char2): string
    {
        $newhp = $char2->health - $char1->strength;
        $char2->health = $newhp;
        $action = $char1->name . " attacked " . $char2->name . " for " . $char1->strength . " damage<br>";
        return $action;
    }

    function levelUp(): string
    {
        $this->health = $this->health + 20;
        $this->strength = $this->strength + 5;

        $action = $this->name . " has levelled up!<br>";
        return $action;
    }

    static function simulateBattle($char1, $char2): string
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
}
