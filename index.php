<?php
$numbers= [7,9,8,9,8,8,6];

function printArray($array)
{
    echo implode($array, ",");
}

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
    ?>

</body>
</html>