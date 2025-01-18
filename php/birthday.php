<!DOCTYPE html>
<html>
<head>
	<title>Bday Countdown</title>
</head>
<body>
	<h3>Countdown for birthday</h3>
	<form method="post">
		<label for="month">Month:</label>

		<input type="number" name="month" min="1" max="12" required>
		<label for="day">Day:</label>

		<input type="number" name="day" min="1" max="31" required>
		<label for="year">Year:</label>
		
		<input type="number" name="year" min="<?php echo date("Y"); ?>" required>
		<input type="submit" value="Countdown">
	</form>

	<?php
	if(isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year'])) {
		$today = time();
		$birthday = strtotime($_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day']);

		$diff = $birthday - $today;
		if($diff < 0) {
			echo "<p>Sorry, your birthday has already passed.</p>";
		} else {
			$days = floor($diff / (60 * 60 * 24));
			$hours = floor(($diff % (60 * 60 * 24)) / (60 * 60));
			$minutes = floor(($diff % (60 * 60)) / 60);
			$seconds = $diff % 60;

			echo "<p>Your birthday is in $days days, $hours hours, $minutes minutes, and $seconds seconds.</p>";
		}
	}
	?>
</body>
</html>
