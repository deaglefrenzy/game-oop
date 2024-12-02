<?php

require "Character.php";
require "functions.php";
require "heroclasses\Mage.php";
require "heroclasses\Warrior.php";
require "heroclasses\Archer.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $playerID = $_POST['playerID'];
    $file = $_POST['file'];
    $achar = get($file, $playerID);

    $playerID = $achar[0][0];
    $name = $achar[0][1];
    $health = $achar[0][2];
    $strength = $achar[0][3];
    $mana = $achar[0][4];
    $className = $achar[0][5];


    if ($className == "Warrior") {
        $add = new Warrior($playerID, $name, $health, $strength, $mana, $className);
        $response = $add->meleeAttack();
    } else if ($className == "Archer") {
        $add = new Archer($playerID, $name, $health, $strength, $mana, $className);
        $response = $add->rangedAttack();
    } else if ($className == "Mage") {
        $add = new Mage($playerID, $name, $health, $strength, $mana, $className);
        $response = $add->castSpell();
    }
    //dd($response);
    if (! empty($response)) {
?>
        <script language="javascript">
            alert("<?php echo $response; ?>");
        </script>
    <?php
    }
    ?>
    <meta http-equiv="refresh" content="0; url='index.php'">
<?php
}
