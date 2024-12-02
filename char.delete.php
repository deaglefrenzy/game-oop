<?php

require "Character.php";
require "functions.php";
require "heroclasses\Mage.php";
require "heroclasses\Warrior.php";
require "heroclasses\Archer.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $playerID = $_POST['playerID'];
    $file = $_POST['file'];
    $data = get($file);

    $result = [];
    foreach ($data as $key => $row) {
        if ($row[0] <> $playerID) {
            $result[] = $data[$key];
        }
    }
    //dd($result);

    $response = put($file, $result, "w");
    if (! empty($response)) {
?>
        <script language="javascript">
            alert("Character deleted.");
        </script>
    <?php
    }
    ?>
    <meta http-equiv="refresh" content="0; url='index.php'">
<?php
}
