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
$score1Err = $score2Err = $score3Err = $score4Err = $score5Err = "";
$score1 = $score2 = $score3 = $score4 = $score5 = $sum_ofscores = $average_score = $score1grade = $score2grade = $score3grade = $score4grade = $score5grade ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["score1"])) {
    $score1Err = "Score1 is required";
  } else {
    $score1 = test_input($_POST["score1"]);
  }
  
  if (empty($_POST["score2"])) {
    $score2Err = "Score2 is required";
  } else {
    $score2 = test_input($_POST["score2"]);
  }
    
  if (empty($_POST["score3"])) {
    $score3Err = "Score3 is required";
  } else {
    $score3 = test_input($_POST["score3"]);
  }
  
  if (empty($_POST["score4"])) {
    $score4Err = "Score4 is required";
  } else {
    $score4 = test_input($_POST["score4"]);
  }
  
  if (empty($_POST["score5"])) {
    $score5Err = "Score5 is required";
  } else {
    $score5 = test_input($_POST["score5"]);
  }
  if($score1 !="" && $score2 !="" && $score3 !="" && $score4 !="" && $score5 !="")
  {
	  $average_score = get_average($score1,$score2,$score3,$score4,$score5);
	  $score1grade = get_testgrades($score1);
	  $score2grade = get_testgrades($score2);
	  $score3grade = get_testgrades($score3);
	  $score4grade = get_testgrades($score4);
	  $score5grade = get_testgrades($score5);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function get_average($score1,$score2,$score3,$score4,$score5) {
  $sum_ofscores = ($score1+$score2+$score3+$score4+$score5);
  $average_score = $sum_ofscores/5;
  return $average_score;
}

function get_testgrades($score) {
      if($score >=90 && $score <=100)
	  {
		  $score1grade ="A";
      }
	  else if($score >=80 && $score <=89)
	  {
		  $score1grade ="B";
      }
	  else if($score >=70 && $score <=79)
	  {
		  $score1grade ="C";	  
	  }
	  else if($score >=60 && $score <=69)
	  {
		  $score1grade ="D";
	  }
	  else if($score<60)
	  {
		  $score1grade ="F";
	  }	  
	  return $score1grade; 
}
?>

<h2>Test scores avaluator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Score1: <input type="text" name="score1" placeholder="Enter first score.">
  <span class="error">* <?php echo $score1Err;?></span>
  <br><br>
  Score2: <input type="text" name="score2" placeholder="Enter second score.">
  <span class="error">* <?php echo $score2Err;?></span>
  <br><br>
  Score3: <input type="text" name="score3" placeholder="Enter third score.">
  <span class="error"><?php echo $score3Err;?></span>
  <br><br>
  Score4: <input type="text" name="score4" placeholder="Enter fourth score.">
  <span class="error">* <?php echo $score4Err;?></span>
  <br><br>
  Score5: <input type="text" name="score5" placeholder="Enter fifth score.">
  <span class="error">* <?php echo $score5Err;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Test scores results:</h2>";

echo "Everare score is: {$average_score} <br>";

echo "Score 1 grade is: {$score1grade} <br>";

echo "Score 2 grade is: {$score2grade} <br>";

echo "Score 3 grade is: {$score3grade} <br>";

echo "Score 4 grade is: {$score4grade} <br>";

echo "Score 5 grade is: {$score5grade} <br>";

?>

</body>
</html>