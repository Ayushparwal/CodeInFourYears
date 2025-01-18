<?php
function create_table($A, $B, $C, $D) {
  $Z = '<table>';
  $Z .= '<tr><td>' . $A . '</td><td>' . $B . '</td></tr>';
  $Z .= '<tr><td>' . $C . '</td><td>' . $D . '</td></tr>';
  $Z .= '</table>';

  return $Z;
}

$A = 'Ayush';
$B = 'Parwal';
$C = 'Atus';
$D = 'king';

$print = create_table($A, $B, $C, $D);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Table Example</title>
</head>
<body>
	<?php echo $print; ?>
</body>
</html>
