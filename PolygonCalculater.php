<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convex Polygon Calculator</title>
</head>
<body>

<h3>Convex Polygon Calculator</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="month">Month:</label>
    <input type="number" id="sides" name="sides" min="1" max="20" value="3" >
    <input type="number" id="length" name="length" >
    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sides = $_POST["sides"];
    $length = $_POST["length"];

    $area = ($sides * $length) / 2;

    echo "the area of this shape is. $area .";

}

?>

</body>
</html>