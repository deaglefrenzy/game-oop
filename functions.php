<?php

use Core\Character;

function simulateBattle($char1, $char2): string
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

function charStatus($char): string
{
    $status = "<font style='font-size:20px; font-weight:bold;'>" . $char->name . "</font> ";
    $status .= "HP: " . $char->health . ", ";
    $status .= "STR: " . $char->strength . ", ";
    $status .= "MANA: " . $char->mana;
    $status .= "<br><br>";
    return $status;
}

function populate(): array
{
    $fantasyNames = [
        "Aerith",
        "Baelric",
        "Caelum",
        "Daelith",
        "Elyndra",
        "Faelora",
        "Galadorn",
        "Helion",
        "Isilme",
        "Jorvan",
        "Kaelith",
        "Lorien",
        "Myrddin",
        "Nivara",
        "Oberon",
        "Pryndel",
        "Quillan",
        "Rhaegor",
        "Sylvaris",
        "Thalorin",
        "Ulther",
        "Vaelwyn",
        "Wyndral",
        "Xanther",
        "Ylvara",
        "Zarathor",
        "Amarion",
        "Belthar",
        "Corvyn",
        "Drevan",
        "Eryndor",
        "Fenwyn",
        "Gildar",
        "Halyra",
        "Ivorian",
        "Jareth",
        "Kaelwyn",
        "Lirien",
        "Morthil",
        "Nyssara",
        "Orynth",
        "Pyrran",
        "Quenril",
        "Rhyndor",
        "Selvyn",
        "Talion",
        "Ultharion",
        "Valdric",
        "Wynvara",
        "Xylander",
        "Ysaria",
        "Zorvan",
        "Aelindra",
        "Bryneth",
        "Calystria",
        "Darian",
        "Evarion",
        "Feylith",
        "Grathor",
        "Halendor",
        "Ilyndra",
        "Jovaryn",
        "Kyrndel",
        "Lathien",
        "Meliora",
        "Nythril",
        "Oryndal",
        "Phaelor",
        "Qalindra",
        "Ravynn",
        "Syrathis",
        "Thalindra",
        "Ulvaryn",
        "Veylith",
        "Wrynnar",
        "Xyndral",
        "Yvalen",
        "Zaldris",
        "Arwyn",
        "Balindor",
        "Cervith",
        "Draythor",
        "Elrion",
        "Ferindel",
        "Gorath",
        "Halveth",
        "Illyria",
        "Jorath",
        "Kelvaris",
        "Lysara",
        "Morvyn",
        "Nareth",
        "Othryn",
        "Pharion",
        "Qarindra",
        "Rynther",
        "Sylveth",
        "Tharion",
        "Urvalyn",
        "Valtheris"
    ];
    $classes = ['Warrior', 'Mage', 'Archer'];

    $karakter = [];
    for ($i = 1; $i <= 20; $i++) {
        $randomclass = $classes[array_rand($classes)];
        if ($randomclass !== "Mage") {
            $randommana = rand(1, 6) * 5;
        } else {
            $randommana = 0;
        }
        $karakter[] = [
            'playerID' => $i,
            'name' => $fantasyNames[array_rand($fantasyNames)],
            'health' => rand(6, 10) * 10,
            'strength' => rand(1, 6) * 5,
            'mana' => $randommana,
            'className' => $randomclass
        ];
    }
    return $karakter;
}

function put($file, $data, $mode): string
{
    if ($handle = fopen($file, $mode)) {
        foreach ($data as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);
        return "Data written.";
    } else {
        return "Unable to open file for writing.";
    }
}

function get($file, $search = 0): array
{
    if (($handle = fopen($file, 'r')) !== false) {

        $data = [];
        while (($row = fgetcsv($handle, 1000, ',')) !== false) {
            $data[] = $row;
        }
        fclose($handle);

        if ($search === 0) {
            return $data;
        } else {
            $result = [];
            foreach ($data as $key => $row) {
                if ($row[0] == $search) {
                    $result = $data[$key];
                }
            }
            $searched[] = $result;
            return $searched;
        }
    } else die("Can't open file.");
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}
