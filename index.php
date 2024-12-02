<?php

require "Character.php";
require "heroclasses\Mage.php";
require "heroclasses\Warrior.php";
require "heroclasses\Archer.php";
require "functions.php";

$file = "data.csv";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = populate();
    put($file, $data, "w");
}

$view = get($file);
//dd($view);
$jum = count($view);

?>
<div align=center>
    <br>
    <form action="index.php" method="post">
        <td align="center">
            <button type="submit" name="act" value="populate">Reset to new 20 characters</button>
        </td>
    </form>

    <table style="width:35%; border:3px solid #333; margin:40px;" rules="all">
        <thead align="center">
            <th>ID</th>
            <th>Class</th>
            <th>Hero Name</th>
            <th width=60>Health</th>
            <th width=60>Strength</th>
            <th width=60>Mana</th>
            <th colspan="2">Action</th>
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
                <td colspan="2" align="center"><button type="submit" name="act" value="add">Add Character</button></td>
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
                <form action="char.attack.php" method="post">
                    <td align="center">
                        <input hidden name="playerID" value="<?= $row[0] ?>">
                        <input type="hidden" name="file" value="<?php echo $file; ?>">
                        <button type="submit" name="act" value="attack">Attack</button>
                    </td>
                </form>
                <form action="char.delete.php" method="post" onsubmit="return confirm('Delete this character?');">
                    <td align="center">
                        <input hidden name="playerID" value="<?= $row[0] ?>">
                        <input type="hidden" name="file" value="<?php echo $file; ?>">
                        <button type="submit" name="act" value="attack">Delete</button>
                    </td>
                </form>
            </tr>
        <?php
        }
        ?>
    </table>
</div>