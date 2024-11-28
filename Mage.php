<?php

use Core\Character;

class Mage extends Character
{

    public int $mana;

    function __construct(
        string $name,
        int $health = 60,
        int $strength = 5,
        int $mana = 50
    ) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->mana = $mana;
    }

    function mageStatus(): string
    {
        $status = "<font style='font-size:20px; font-weight:bold;'>" . $this->name . "</font> ";
        $status .= "HP: " . $this->health . ", ";
        $status .= "STR: " . $this->strength;
        if ($this->mana > 0) $status .= ", MANA: " . $this->mana;
        $status .= "<br><br>";
        return $status;
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
