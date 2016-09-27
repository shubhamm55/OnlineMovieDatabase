<html>

<body>
<?php

include('Database API\tmdb-api.php');

$tmdb = new TMDB($conf);
$genre = "";
$movies = $tmdb->searchMovie("wiz");

foreach($movies as $movie)
{
	echo '<p>' . $movie->getTitle() . '</p><br>';
	$genres = $movie->getGenres();

	foreach($genres as $genre)
		echo '<p>' . $genre->getName() . '</p>';
	echo '<br><br>';
}
?>

</body>

</html>