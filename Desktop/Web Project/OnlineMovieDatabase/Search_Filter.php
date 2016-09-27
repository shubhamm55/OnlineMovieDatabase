<?php

include('Database API\tmdb-api.php');

$tmdb = new TMDB($conf);
$filter = "";

$genres = $tmdb->getMovieGenres();
foreach($genres as $genre)
{
	if($genre->getID() == $_POST['genre']);
	{
		$filter = $genre->getName();
		break;
	}
}
$search = $_POST['search'];
$movies = $tmdb->searchMovie($search);
$i = 0;
$j = 0;

foreach($movies as $movie)
{
	$m_genres = $movie->getGenres();
	foreach($m_genres as $mgenres)
	{
		if($mgenres->getName() == $filter)
			$j = $j+1;
	}
}
echo $filter.$search;

/*echo '<h3>MOVIES:</h3>';
foreach($movies as $movie)
{
	$m_genres = $movie->getGenres();
	foreach($m_genres as $mgenres)
	{
		if($mgenres->getName() == $filter)
		{
			if($i == 0)
				echo '<div class="row">';
			if($i !=0 && $i%3 == 0)
				echo '</div><br><br><div class="row">';
			echo 
			'<div class="col-md-4">
				<img src="'. $tmdb->getImageURL('w185') . $movie->getPoster() .'" alt="' . $movie->getTitle() . '">
				<br>
				<b>'. $movie->getTitle() .'</b>
			</div>';

			$i = $i+1;

			if($i == $j)
				echo '</div>';
		}
	}	
}*/

?>