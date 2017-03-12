<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 3.3.2017
 * Time: 09:29
 */
include "includes.php";
$JSON = file_get_contents("../JSON/myndir.json");
$JSON_A = json_decode($JSON,true);

?>
<h2>Verkefni 5 - API</h2>


<div class="Main">
    <form action="http://178.62.67.77/Verkefni5/sidur/addjason.php" method="post">
        <label>Nafn Myndar:</label> <br>
        <input type="text" name="Nafn" value="">
        <br>
        <label> Slóð myndar:  </label><br>
        <input type="text" name="Path" value="">
        <br><br>
        <input type="submit" value="Vista mynd">
    </form>
    <?php
    $i = 0;
    foreach($JSON_A as $k) {
        echo $k["Nafn"] . " ";
        echo "<br>";
        $img = $k['Path'];
        echo $k['Path'];
        echo "<br>";
        echo '<img src="' . $img . '" height="500px" width="800px">';
        echo "<br>";
    }
    ?>




</div>

