<html>
	<head>
		<title>Movie DB</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	
	<body class="mystyle">
	
		<div class="page-header">
			<img src="Images/q1.png" class="logo">
			<div class="dropdown dropdownuser">
			<button type="button" class="btn dropdown-toggle userbtn" data-toggle="dropdown">
    					<span class="glyphicon glyphicon-user"></span>
					<span class="caret"></span>
			</button>
					<ul class="dropdown-menu">
    						<li><a href="#">*USERNAME*</a></li>
						<li class="divider"></li>
    						<li><a href="#">Sign Out  <span class="glyphicon glyphicon-log-out"></span></a></li>
  					</ul>
			</div>
		</div>
		<div class="container">
		<ul class="nav nav-pills">
  			<li><a href="layout.html">Home</a></li>
  			<li  class="active"><a href="movies.html">Movies</a></li>
  			<li><a href="tv.html">TV Shows</a></li>
  			<li><a href="anime.html">Anime</a></li>
		</ul>
		<br>
		<br>
		<div class="container row">
			<div class = "filter-box col-md-3">
				<h3>Sort By</h3>
				<br>
				<ul type="circle">
					<li>Rating</li>
					<li>Name</li>
					<li>Date of Release</li>
				</ul>
				<br>
				<br>
				<h3>Genre</h3>
				<ul type="circle">
					<li>Drama</li>
					<li>Thriller</li>
					<li>Comedy</li>
					<li>Horror</li>
					<li>Sci-Fi</li>
				</ul>
			</div>
			
			<div class="scrollable col-md-9">
				<!--<img src="BOB.jpg" class="list-img">
				<img src="fma.jpg" class="list-img">
				<img src="pulp-fiction.jpg" class="list-img">
				<img src="BB.jpg" class="list-img">
				<img src="GOT.jpg" class="list-img">
				<img src="stranger-things.jpg" class="list-img">
				<img src="mrRobot.jpg" class="list-img">
				<img src="naruto.jpg" class="list-img">
				<img src="hxh.png" class="list-img">
				<img src="fma.jpg" class="list-img">
				<img src="fma.jpg" class="list-img">
				<img src="fma.jpg" class="list-img">
				<img src="fma.jpg" class="list-img">-->
				<?php 
				include('Database API\tmdb-api.php');
				$tmdb = new TMDB($cnf);
				
				$tmdb->setAdult(false);
						
				$movies1 = $tmdb->getDiscoverMovies(rand(1,1000));
				$movies2= $tmdb->getDiscoverMovies(rand(1,1000));
				$movies3= $tmdb->getDiscoverMovies(rand(1,1000));
				$movies4= $tmdb->getDiscoverMovies(rand(1,1000));
				$res1= array_merge($movies1,$movies2);
				$res2= array_merge($movies3,$movies4);
				$res3= array_merge($res1,$res2);
				foreach($res3 as $movie)
				{
					if($movie->getPoster()==null)
					{
						continue;
					}
					echo '
					<div class="hovereffect img-div">
						<img class="img-responsive list-img" src="'. $tmdb->getImageURL('w185') . $movie->getPoster() .'" alt="'. $movie->getTitle() .'">
							<div class="overlay">
           							<h2>'. $movie->getTitle() .'</h2>
           							<a class="info" href="Movie_Landing.php?id='. $movie->getID() .'">Read More..</a>
        						</div>
        				</div>';
				}
				?>
			</div>
			
		</div>
		<br>
		<br>
	
	</body> 
</html>            
