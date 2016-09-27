<html>
	<head>
		<title>Movie DB</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="Authentication.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		
	</head>
	
	<body>
		<div class="container-fluid" style="position: relative">
			<div class="navbar navbar-default navbar-fixed-top" id="navpill">
				<div class="page-header">
					<img src="popKorner.png" alt="pop-Korner" style="position: absolute;top: 10px;left: 20px;width: 80px;height: 90px">
					<div class="dropdown dropdownuser" style="position: absolute;top: 25px;left: 1150px">
						<button type="button" class="btn dropdown-toggle userbtn" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span>
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php
								
								session_start();

								if(isset($_SESSION["prompt"]))
								{
									echo '<li><a href="profile.php">' . $_SESSION["UserName"] . '</a></li>
									<li class="divider"></li>
									<li><a href="Logout.php">Sign Out  <span class="glyphicon glyphicon-log-out"></span></a></li>
								';
								}

								else
								{
									echo '<li><a href="#">Hi Guest</a></li>
									<li class="divider"></li>
									<li><a href="Trial_SignIn.php">Log In  <span class="glyphicon glyphicon-log-out"></span></a></li>
									<li class="divider"></li>
									<li><a href="Trial_SignUp.php">Sign Up  <span class="glyphicon glyphicon-log-out"></span></a></li>
								';	
								}
							?>
						</ul>
					</div>
				</div>
				<ul class="nav nav-pills">
			  			<li class="active"><a href="layout.php">Home</a></li>
			  			<li><a href="movies.html">Movies</a></li>
			  			<li><a href="tv.html">TV Shows</a></li>
			  			<li><a href="anime.html">Anime</a></li>
				</ul>

				<form style="position: absolute;left: 800px">
					<input type="text" name="search" id="search" size="30" onkeyup="showResult()">
					<div id="livesearch"></div>
				</form>
			</div>

			<!--<div id="myCarousel" class="carousel slide" data-ride="carousel" >
				<ol class="carousel-indicators">
	    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    				<li data-target="#myCarousel" data-slide-to="1"></li>
	    				<li data-target="#myCarousel" data-slide-to="2"></li>
	    				<li data-target="#myCarousel" data-slide-to="3"></li>
	  			</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="got1.jpg" alt="Game of Thrones">
					</div>
					<div class="item">
						<img src="shawshank2.jpg" alt="Shawshank Redemption">
					</div>
					<div class="item">
						<img src="Breaking-Bad.jpg" alt="3 Idiots">
					</div>
					<div class="item">
						<img src="naruto1.jpg" alt="Naruto">
					</div>
				</div>
		 		<!-- Left and right controls 
		  		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		   			 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		   			 <span class="sr-only">Previous</span>
		  		</a>
		  		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    			<span class="sr-only">Next</span>
		  		</a>
			</div>-->

			<div id="myPanel" class="panel panel-info" style="background-color: maroon">
				<div class="panel-heading" style="background-color: maroon;border: 0">
					<h3 class="panel-title" style="font-size: 50px">Sneak Peek</h3>
				</div>
				<div class="panel-body" style="background-color: maroon">
					<table class="table">
						<tr>
							<th rowspan="5" style="border: 0"><img src="got1.jpg" alt="Game of Thrones" height="250px" width="150px"></th>
							<th rowspan="5" style="border: 0"><img src="shawshank2.jpg" alt="Shawshank Redemption" height="250px" width="150px"></th>
							<th rowspan="5" style="border: 0"><img src="Breaking-Bad.jpg" alt="Breaking Bad" height="250px" width="150px"></th>
							<th rowspan="5" style="border: 0"><div class="verticalDivider" style="width: 2px;background-color: black;height: 250px"></div></th>
							<th style="border: 0">Recent Releases</th>
						</tr>
						<tr>
							<th style="border: 0">Release 1</th>
						</tr>
						<tr>
							<th style="border: 0">Release 2</th>
						</tr>
						<tr>
							<th style="border: 0">Release 3</th>
						</tr>
						<tr>
							<th style="border: 0">Release 4</th>
						</tr>
					</table>	
				</div>
			</div>
			<br>
			<br>

			<div id="linkPanel" class="panel panel-default" style="background-color: maroon">
				<div class="panel-heading" style="background-color: maroon;border: 0">
					<h3 class="panel-title">Quick Access</h3>
				</div>
				<div class="panel-body" style="background-color: maroon">
					<a href="#" style="font-size: 20px">Link 1</a><br><br>
					<a href="#" style="font-size: 20px">Link 2</a><br><br>
					<a href="#" style="font-size: 20px">Link 3</a><br><br>
					<a href="#" style="font-size: 20px">Link 4</a><br><br>
					<a href="#" style="font-size: 20px">Link 5</a><br><br>
					<a href="#" style="font-size: 20px">Link 6</a><br><br>
					<a href="#" style="font-size: 20px">Link 7</a>		
				</div>
			</div>

			<div class="container top10">
				<div class="col-md-4 box">
					<h3 style="text-align:center left-caro"><b>Top rated Movies</b></h6>
					<ul>
					<br>
						<li id="movie">Movie 1</li>
						<li id="movie">Movie 2</li>
						<li id="movie">Movie 3</li>
						<li id="movie">Movie 4</li>
						<li id="movie">Movie 5</li>
						<li id="movie">Movie 6</li>
						<li id="movie">Movie 7</li>
						<li id="movie">Movie 8</li>
						<li id="movie">Movie 9</li>
						<li id="movie">Movie 10</li>
					</ul>	
				</div>

				<div class="col-md-4 left-caro box">
					<h3 style="text-align:center"><b>Top rated TV Shows</b></h6>
					<ul>
					<br>
						<li id="movie">TV Show 1</li>
						<li id="movie">TV Show 2</li>
						<li id="movie">TV Show 3</li>
						<li id="movie">TV Show 4</li>
						<li id="movie">TV Show 5</li>
						<li id="movie">TV Show 6</li>
						<li id="movie">TV Show 7</li>
						<li id="movie">TV Show 8</li>
						<li id="movie">TV Show 9</li>
						<li id="movie">TV Show 10</li>
					</ul>	
				</div>

		   		<div class="col-md-4 box left-caro ">
					<h3 style="text-align:center"><b>Top rated Anime</b></h6>
					<ul>
					<br>
						<li id="movie">Anime 1</li>
						<li id="movie">Anime 2</li>
						<li id="movie">Anime 3</li>
						<li id="movie">Anime 4</li>
						<li id="movie">Anime 5</li>
						<li id="movie">Anime 6</li>
						<li id="movie">Anime 7</li>
						<li id="movie">Anime 8</li>
						<li id="movie">Anime 9</li>
						<li id="movie">Anime 10</li>
					</ul>	
				</div>
			</div>
		</div>
	</body> 
</html>            
