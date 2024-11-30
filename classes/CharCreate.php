<?php

use Core\Character;

class CharCreate extends Character
{
    public string $name;
    public int $health;
    public int $strength;
    public int $playerID;
    public int $mana;
    public string $className;

    public function __construct($playerID, $health, $strength, $name, $mana, $className)
    {
        parent::charInit($playerID, $health, $strength, $name, $mana, $className);
    }

    private function insertChar($file, $data)
    {
        put($file, $data, "a");
    }

    private function isEmptySubmit()
    {
        if (isset($this->name)) {
            return false;
        } else return true;
    }

    public function spawn($file, $data)
    {
        //error handles
        if ($this->isEmptySubmit()) {
            header("location: 'index.php'");
            die();
        }

        //if no error
        $this->insertChar($file, $data);
    }
}
