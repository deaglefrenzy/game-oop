<?php

require "Character.php";
require "heroclasses\Mage.php";
require "heroclasses\Warrior.php";
require "heroclasses\Archer.php";
require "functions.php";
require "classes\CharCreate.php";


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $playerID = $_POST['playerID'];
    $name = $_POST['name'];
    $health = $_POST['health'];
    $strength = $_POST['strength'];
    $mana = $_POST['mana'];
    $className = $_POST['className'];
    $file = $_POST['file'];

    if ($className == "Warrior") $add = new Warrior($playerID, $name, $health, $strength, $mana, $className);
    else if ($className == "Archer") $add = new Archer($playerID, $name, $health, $strength, $mana, $className);
    else if ($className == "Mage") $add = new Mage($playerID, $name, $health, $strength, $mana, $className);

    $result = CharCreate::spawn($file, $add);
}
