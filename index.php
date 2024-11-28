<?php

require "Character.php";
require "Mage.php";

use Core\Character;

$hero = new Character("Aragon");
echo $hero->charStatus();

$villain = new Character("Orc", 80, 5);
echo $villain->charStatus();

echo Character::attack($hero, $villain);

echo $villain->charStatus();

echo $hero->levelUp();

echo $hero->charStatus();

echo Character::simulateBattle($hero, $villain);

echo "<br><br>";

echo $hero->charStatus();
echo $villain->charStatus();

$mage = new Mage("Gandalf");
$villain = new Character("Balrog", 80, 8);

echo $mage->mageStatus();
echo $villain->charStatus();

echo $mage->castSpell($villain);

echo $mage->mageStatus();
echo $villain->charStatus();
