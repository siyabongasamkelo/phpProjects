<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$secondsErr ="";
$seconds = $days = $remainingSeconds = $hours = $remainingSeconds = $minutes = $remainingSeconds ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["seconds"])) {
    $secondsErr = "Please enter number of seconds!";
  } else {
    $seconds = test_input($_POST["seconds"]);
	if($seconds ==60)
	{
		// Convert seconds to days, hours, minutes, and seconds
       $days = floor($seconds / 86400);
       $remainingSeconds = $seconds % 86400;
       $hours = floor($remainingSeconds / 3600);
       $remainingSeconds = $remainingSeconds % 3600;
       $minutes = floor($remainingSeconds / 60);
       $remainingSeconds = $remainingSeconds % 60;
	}
	if($seconds>60)
	{
        // Convert seconds to days, hours, minutes, and seconds
       $days = floor($seconds / 86400);
       $remainingSeconds = $seconds % 86400;
       $hours = floor($remainingSeconds / 3600);
       $remainingSeconds = $remainingSeconds % 3600;
       $minutes = floor($remainingSeconds / 60);
       $remainingSeconds = $remainingSeconds % 60;
    }
	if($seconds>3600)
	{
       // Convert seconds to days, hours, minutes, and seconds
       $days = floor($seconds / 86400);
       $remainingSeconds = $seconds % 86400;
       $hours = floor($remainingSeconds / 3600);
       $remainingSeconds = $remainingSeconds % 3600;
       $minutes = floor($remainingSeconds / 60);
       $remainingSeconds = $remainingSeconds % 60;
    }
	if($seconds>86400)
	{
       // Convert seconds to days, hours, minutes, and seconds
       $days = floor($seconds / 86400);
       $remainingSeconds = $seconds % 86400;
       $hours = floor($remainingSeconds / 3600);
       $remainingSeconds = $remainingSeconds % 3600;
       $minutes = floor($remainingSeconds / 60);
       $remainingSeconds = $remainingSeconds % 60;
    }
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Seconds Converter</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Seconds: <input type="text" name="seconds" placeholder="Enter number of seconds.">
  <span class="error">* <?php echo $secondsErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>See output below:</h2>";
echo  "{$days} days, {$hours} hours, {$minutes} minutes, and {$remainingSeconds} seconds";
?>

</body>
</html>