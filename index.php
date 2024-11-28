<?php

require "Character.php";

use Core\Character;

$hero = new Character("Aragon");
echo $hero->charStatus();

$villain = new Character("Orc", 80, 5);
echo $villain->charStatus();

echo $hero->attack($villain);

echo $villain->charStatus();

echo $hero->levelUp();

echo $hero->charStatus();

Character::simulateBattle($hero, $villain);
// Outputs: Aragon (if Aragon wins the battle)
echo "<br><br>";

echo $hero->charStatus();
echo "<br><br>";
echo $villain->charStatus();
