<html>
	
	<head>
		<title>Movie DB</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="Authentication.js"></script>
		<script>
			function change(val)
			{
				document.getElementById('alert').innerHTML = val;
			}
		</script>
	</head>

	<body>
		<div class="container">
			<p id="bgen"></p>
			<p id="alert"></p>
			<button onclick="change('kronos')">CLICK</button>
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Genres
  				<span class="caret"></span>
  				</button>
  				<ul class="dropdown-menu">
  					<li>ALL</li>
  					<?php

  					include('Database API\tmdb-api.php');

  					$tmdb = new TMDB($conf);

  					$genres = $tmdb->getMovieGenres();

					foreach($genres as $genre)
						echo '<button onclick="filter(' . $genre->getID() . ',\'' . $_POST['search'] . '\')">' . $genre->getName() . '</button>';
					?>
				</ul>
			</div>
			<div id="result">
			<?php

			$search = $_POST['search'];

			$movies = $tmdb->searchMovie($search);
			$i = 0;
			$j = 0;

			foreach($movies as $movie)
				$j = $j+1;

			echo '<h3>MOVIES:</h3>';
			foreach($movies as $movie)
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

			?>
		</div>
		</div>
	</body>

</html>