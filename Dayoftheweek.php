<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month and Day</title>
</head>
<body>

<h3>Month and day</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="month">Month:</label>
    <input type="number" id="month" name="month" min="1" max="12" value="1" >
    <label for="day">Day:</label>
    <input type="number" id="day" name="day" min="1" max="31" value="1" >
    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $month = $_POST['month'];
    $day = $_POST['day'];
    
    
    $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    
    // Check if the input date is within the range of January 1, 2024, to December 31, 2024
    if ($month < 1 || $month > 12 || $day < 1 || $day > 31) {
        echo "Invalid date. Please enter a date within the range of January 1, 2024, to December 31, 2024.";
    } else {
        // Calculate the day of the week
        $date = new DateTime("$month/$day/2024", new DateTimeZone('UTC'));
        $dayOfWeek = $daysOfWeek[$date->format('w')];
    
        echo "The day of the week is $dayOfWeek.";
    }

}
?>

</body>
</html>