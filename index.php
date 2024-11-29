<?php

require "Character.php";
require "Mage.php";
require "Warrior.php";
require "functions.php";

use Core\Character;

$hero = new Warrior(1, "Aragon");
echo charStatus($hero);

$villain = new Warrior(2, "Orc", 80, 5);
echo charStatus($villain);

echo Character::attack($hero, $villain);

echo charStatus($villain);

echo $hero->levelUp();

echo charStatus($hero);

echo simulateBattle($hero, $villain);

echo "<br><br>";

echo charStatus($hero);
echo charStatus($villain);

$mage = new Mage(3, "Gandalf");
$villain = new Warrior(4, "Balrog", 80, 8);

echo charStatus($mage);
echo charStatus($villain);

echo $mage->castSpell($villain);

echo charStatus($mage);
echo charStatus($villain);
