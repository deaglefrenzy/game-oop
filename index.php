<?php

require "Character.php";
require "heroclasses\Mage.php";
require "heroclasses\Warrior.php";
require "heroclasses\Archer.php";
require "functions.php";

$file = "data.csv";

//$data = populate();

//put($file, $data, "w");

$view = get($file);
$jum = count($view);

?>
<table align="center" style="width:35%; border:3px solid #333;" rules="all">
    <thead align="center">
        <th>ID</th>
        <th>Class</th>
        <th>Hero Name</th>
        <th width=60>Health</th>
        <th width=60>Strength</th>
        <th width=60>Mana</th>
        <th>Action</th>
    </thead>
    <form action="char.add.php" method="post">
        <input type="hidden" name="file" value="<?php echo $file; ?>">
        <tr>
            <td>
                <input type="hidden" name="playerID" value="<?php echo $jum + 1; ?>">
                <input value="<?php echo $jum + 1; ?>" disabled size="3">
            </td>
            <td>
                <select name="className">
                    <option value="Warrior">Warrior</option>
                    <option value="Archer">Archer</option>
                    <option value="Mage">Mage</option>
                </select>
            </td>
            <td><input name="name" placeholder="New hero name"></td>
            <td><input name="health" size="2"></td>
            <td><input name="strength" size="2"></td>
            <td><input name="mana" size="2"></td>
            <td><button type="submit" name="act" value="add">+</button></td>
        </tr>
    </form>
    <?php
    foreach ($view as $row) {
    ?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td></td>
        </tr>
    <?php
    }
    ?>
</table>