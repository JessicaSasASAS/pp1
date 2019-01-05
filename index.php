<?php
ini_set ('display_errors', 1);
error_reporting(E_ALL);

$numbers= [7,9,8,9,8,8,6];
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>PP1</h1>

    <?php
    printArray($numbers);
    echo "<br>";
    largest($numbers);
    echo"<br>";
    average($numbers);
    echo"<br>";
    removeDups($numbers);
    ?>

</body>
</html>