<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DivisionTable.css">
    <title>Division Table</title>
</head>
<body>

<h3>Divison Table</h3>

<?php

    $numbers = [1.000, 2.000, 3.000, 4.000, 5.000, 6.000, 7.000, 8.000, 9.000, 10.000];


    // echo "<div class=\"wrapper\">";
    //     for ($i = 0; $i < count($numbers); $i++) {
    //         echo "div class=\"square\" >" . $numbers[$i] . "</div>";
    //     }
    // echo "</div>";

    echo "<div class=\"wrapper\">";
    for ($i = 0; $i < count($numbers); $i++) {
        echo "<div class=\"square\">" . $numbers[$i] . "</div>";
    }
    echo "</div>";

?>

</body>
</html>