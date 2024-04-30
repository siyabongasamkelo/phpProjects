<?php
$numberofrows = 6;

for ($c = 1; $c <= $numberofrows; $c++) {
  for ($g = 1; $g <= $c; $g++) {
  if ($g == 1 || $g == $c) {
  echo "# ";
  } else {
  echo "&nbsp;&nbsp;&nbsp;";
  }
  }
  echo "<br>";
}
?>
