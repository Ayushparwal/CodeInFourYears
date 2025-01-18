<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $x = $_POST['value1'];
  $y = $_POST['value2'];

  if ($x == $y) {
    $result = "$x is equal to $y";
  } else {
    $result = "$x is not equal to $y";
  }

  if ($x < $y) {
    $result .= "<br>$x is less than $y";
  } else {
    $result .= "<br>$x is not less than $y";
  }

  if ($x > $y) {
    $result .= "<br>$x is greater than $y";
  } else {
    $result .= "<br>$x is not greater than $y";
  }

  if ($x <= $y) {
    $result .= "<br>$x is less than or equal to $y";
  } else {
    $result .= "<br>$x is not less than or equal to $y";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Comparison Operators Example</title>
</head>
<body>
  <form method="post">
    <label for="value1">Enter Value 1:</label>
    <input type="text" id="value1" name="value1"><br>

    <label for="value2">Enter Value 2:</label>
    <input type="text" id="value2" name="value2"><br>

    <input type="submit" value="Compare">
  </form>

  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <h2>Checking for Comparision Loading...<h2>
    <p><?= $result ?></p>
  <?php } ?>
</body>
</html>
