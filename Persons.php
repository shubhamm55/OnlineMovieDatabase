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
			<img src="Images\q1.png" class="logo">
			<div class="dropdown dropdownuser">
			<button type="button" class="btn dropdown-toggle userbtn" data-toggle="dropdown">
    					<span class="glyphicon glyphicon-user"></span>
					<span class="caret"></span>
			</button>
					<ul class="dropdown-menu">
    					<?php
						
						session_start();

						if(isset($_SESSION["prompt"]))
						{
							echo '<li><a href="User_Profile.php">' . $_SESSION["UserName"] . '</a></li>
							<li class="divider"></li>
							<li><a href="Logout.php">Sign Out  <span class="glyphicon glyphicon-log-out"></span></a></li>
						';
						}

						else
						{
							echo '<li><a href="#">Hi Guest</a></li>
							<li class="divider"></li>
							<li><a href="Log_In.php">Log In  <span class="glyphicon glyphicon-log-out"></span></a></li>
							<li class="divider"></li>
							<li><a href="Sign_Up.html">Sign Up  <span class="glyphicon glyphicon-log-out"></span></a></li>
						';	
						}
					?>
  					</ul>
			</div>
		</div>
		<div class="container">
		<ul class="nav nav-pills">
  			<li><a href="Home_Page.php">Home</a></li>
  			<li><a href="Movies.html">Movies</a></li>
  			<li   class="active"><a href="TV_Shows.html">TV Shows</a></li>
  			<li><a href="anime.html">Anime</a></li>
		</ul>
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
						
				$movies1 = $tmdb->getPopularPersons(rand(1,100));
				$movies2= $tmdb->getPopularPersons(rand(1,100));
				$movies3= $tmdb->getPopularPersons(rand(1,100));
				$movies4= $tmdb->getPopularPersons(rand(1,100));
				$res1= array_merge($movies1,$movies2);
				$res2= array_merge($movies3,$movies4);
				$res3= array_merge($res1,$res2);
				foreach($res3 as $movie)
				{
					if($movie->getProfile()==null)
					{
						continue;
					}
					echo '
					<div class="hovereffect img-div">
						<img class="img-responsive list-img" src="'. $tmdb->getImageURL('w185') . $movie->getProfile() .'" alt="'. $movie->getName() .'">
							<div class="overlay">
           							<h2>'. $movie->getName() .'</h2>
           							<a class="info" href="celeb_landing.php?id='. $movie->getID() .'">Read More..</a>
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
