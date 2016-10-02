

<html>
	<head>
		<title>Movie DB</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<script>
		$(function($) {
			$(document).on('click', '.fav', function(event) {
				$(this).find('.glyphicon').toggleClass('red').toggleClass('glyphicon-heart-empty glyphicon-heart');
			});
		});
		</script>	
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
  			<li  class="active"><a href="Movies.html">Movies</a></li>
  			<li><a href="TV_Shows.html">TV Shows</a></li>
  			<li><a href="anime.html">Anime</a></li>
		</ul>
		<div class = "container movie-box">
			<div class="row">
				<?php
				include('Database API\tmdb-api.php');
				$tmdb = new TMDB($conf);
				$id = $_GET['id'];
				$person = $tmdb->getPerson($id);
				$movies = $person->getMovieRoles();
				$tvs= $person->getTVShowRoles();
				echo      '  
							<div class="col-md-2">
									<img src="'. $tmdb->getImageURL('w185') . $person->getProfile() .'"">
							 </div>
							<div class="col-md-10 movie-info">
									<h3><u>'. $person->getName() .'</u></h3>
									<br>
									<h4>Date Of Birth '. $person->getBirthday() .'</h4>
									<br>
									';
									if($movies!=null)
									{
									echo '<h4>Movies:</h4>
									<div class="scrollable roles">'
									;
									foreach($movies as $movie)
									{
										echo '<li><a style="font-size:18px" href="Movie_Landing.php?id='.$movie->getMovieID() .'">'.$movie->getMovieTitle().' </a></li> ';
									}
									echo '<br> 
									<br>
									</div>
									<br>';
									}
									
									if($tvs!=null)
									{
									echo '<h4>TV Shows:</h4> <div class="scrollable roles">'
									;
									foreach($tvs as $tv)
									{
										echo '<li><a style="font-size:18px" href="TV_Landing.php?id='.$tv->getTVShowID() .'">'.$tv->getTVShowName().' </a></li> ';
									}
									echo '<br> 
									</div>
									<br>';
									}
									echo '								
									
									<h4>Rate this Celebrity : <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
									</h4>
									<button type="submit" class="btn fav"><span class="glyphicon glyphicon-heart-empty"></span></button>
							 </div>
							 
					      '
				
				
				?>
			
			</div>
			<br>
			<br>
		</div>
		
	</body> 
</html>            
