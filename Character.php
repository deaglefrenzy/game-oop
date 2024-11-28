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
        $status = "<font style='font-size:20px; font-weight:bold;'>" . $this->name . "</font><br>";
        $status .= "HP &nbsp;: " . $this->health . "<br>";
        $status .= "STR : " . $this->strength . "<br><br>";

        return $status;
    }

    function attack($char): string
    {
        $newhp = $char->health - $this->strength;
        $char->health = $newhp;
        $action = $this->name . " attacked " . $char->name . " with " . $this->strength . " strength<br>";
        return $action;
    }

    function levelUp(): string
    {
        $this->health = $this->health + 20;
        $this->strength = $this->strength + 5;

        $action = $this->name . " has levelled up!<br><br>";
        return $action;
    }

    static function simulateBattle($char1, $char2): string
    {
        while (($char1->health > 0) && ($char2->health > 0)) {
            return $char2->attack($char1);
            return $char1->attack($char2);
        }
    }

    function __toString(): string
    {
        return $this->name . ": (" . $this->health . "/" . $this->strength
            . ")";
    }
}
