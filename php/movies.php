<?php
$movies = array(
  "Science Fiction" => array("Europa", "Confusion", "Time 2:am"),
  "Action" => array("Club house", "The one door", "Last night"),
  "Adventure" => array("Holiday", "Jungle book", "Parking area"),
);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Movies by Genre</title>
</head>
<body>
	<div>
		<?php foreach ($movies as $genre => $moviesList) : ?>
			<h2><?php echo $genre; ?>:</h2>
			<ul>
			<?php foreach ($moviesList as $movie) : ?>
				<li><?php echo $movie; ?></li>
			<?php endforeach; ?>
			</ul>
		<?php endforeach; ?>
	</div>
</body>
</html>
