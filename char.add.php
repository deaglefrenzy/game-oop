<?php

require_once "classes\CharCreate.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $playerID = $_POST['playerID'];
    $name = $_POST['$name'];
    $health = $_POST['$health'];
    $strength = $_POST['$strength'];
    $mana = $_POST['$mana'];
    $className = $_POST['$className'];

    require_once "classes\CharCreate.php";
    require_once "functions.php";

    $add = new CharCreate($playerID, $name, $health, $strength, $name, $className);
    $signup->spawn($file, $add);
}
