<html>
	<head>
		<title>Movie DB</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<script>
			 var anglem = 0;
			 var anglet=0;
			 var anglea=0;
			 function galleryspin(sign,spinner) { 
			 if(spinner=="span1")
			 {
			 spinner = document.querySelector(".spinnerM");
			 if (!sign) { anglem = anglem + 45; } else { anglem = anglem - 45; }
				spinner.setAttribute("style","-webkit-transform: rotateY("+ anglem +"deg); -moz-transform: rotateY("+ anglem +"deg);  					transform: rotateY("+ anglem +"deg);");
			}
			else if(spinner=="span2")
			{
		      spinner = document.querySelector(".spinnerT");
			 	if (!sign) { anglet = anglet + 45; } else { anglet = anglet - 45; }
				spinner.setAttribute("style","-webkit-transform: rotateY("+ anglet +"deg); -moz-transform: rotateY("+ anglet +"deg);  					transform: rotateY("+ anglet +"deg);");
			}
			else if(spinner=="span3")
			{
		      spinner = document.querySelector(".spinnerA");
			 	if (!sign) { anglea = anglea + 45; } else { anglet = anglea - 45; }
				spinner.setAttribute("style","-webkit-transform: rotateY("+ anglea +"deg); -moz-transform: rotateY("+ anglea +"deg);  					transform: rotateY("+ anglea +"deg);");
			}
			}
		</script>
		
	</head>
	
	<body>
		<div class="page-header">
			<img  class="logo" src="Images\q1.png">
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
	  			<li class="active"><a href="Home_Page.php">Home</a></li>
	  			<li><a href="Movies.html">Movies</a></li>
	  			<li><a href="TV_Shows.html">TV Shows</a></li>
	  			<li><a href="anime.html">Anime</a></li>
			</ul>

			<form method="POST" action="Search_Page.php">
				<input type="text" name="search" id="search"><span class="glyphicon glyphicon-user"></span>
				<button type="submit">Search</button>
			</form>

			<div class="our-picks">
				<h2 class="heading">Our Picks</h3>
				<hr>
				<div class="row">
					<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\interstellar.jpg" alt="Interstellar">
							<div class="overlay">
           							<h2>Interstellar</h2>
           							<a class="info" href="Movie_Landing.php?id=157336">Read More..</a>
        						</div>
        				</div>
        				<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\himym.jpg" alt="How I Met Your Mother">
							<div class="overlay">
           							<h2>How I Met Your Mother</h2>
           							<a class="info" href="TV_landing.php?id=1100">Read More..</a>
        						</div>
        				</div>
        				<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\Death-Note.jpg" alt="Death Note">
							<div class="overlay">
           							<h2>Death Note</h2>
           							<a class="info" href="TV_landing.php?id=13916">Read More..</a>
        						</div>
        				</div>
					<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\Sarabhai.jpg" alt="Mr.Robot">
							<div class="overlay">
           							<h2>Sarabhai vs Sarabhai</h2>
           							<a class="info" href="TV_landing.php?id=4165">Read More..</a>
        						</div>
        				</div>
				</div>
			<div>
			<!--<div id="myCarousel" class="carousel slide" data-ride="carousel" >
				<ol class="carousel-indicators">
	    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    				<li data-target="#myCarousel" data-slide-to="1"></li>
	    				<li data-target="#myCarousel" data-slide-to="2"></li>
	    				<li data-target="#myCarousel" data-slide-to="3"></li>
	  			</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="GOT.jpg" alt="GOT" width="460" height="345">
					</div>
					<div class="item">
						<img src="shawshank.jpg" alt="Shawshank" width="460" height="345">
					</div>
					<div class="item">
						<img src="Breaking-Bad.jpg" alt="3idiots" width="460" height="345">
					</div>
					<div class="item">
						<img src="Naruto.jpg" alt="fma" width="460" height="345">
					</div>
				</div>
		 		<!-- Left and right controls -->
		  		<!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		   			 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		   			 <span class="sr-only">Previous</span>
		  		</a>
		  		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    			<span class="sr-only">Next</span>
		  		</a>
			</div>-->
			
			<br>
			<br>
			<h2 class="heading">Top Rated Movies</h2>
				<hr>
				<div id="carousel">
  					<figure id="spinner" class="spinnerM">
    							<img src="Images\shawshank.jpg" class="caro-img  img-responsive" alt>
      					      <img src="Images\Godfather.jpg" class="caro-img  img-responsive" alt>
    						    	<img src="Images\DarkKnight.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\schindlers-list.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\12-angry-men.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\pulp-fiction.jpg" class="caro-img  img-responsive" alt>   								<img src="fight-club.jpg" class="caro-img  img-responsive" alt>
    				  			<img src="Images\lotr.jpg" class="caro-img  img-responsive" alt>
  					</figure>
				</div>
				<span style="float:left" class="ss-icon" onclick="galleryspin('-','span1')">&lt;</span>
				<span style="float:right" class="ss-icon" onclick="galleryspin('','span1')">&gt;</span>
				
				<br>
			<br>
			<h2 class="heading">Top Rated TV Shows</h2>
				<hr>
				<div id="carousel">
  					<figure id="spinner" class="spinnerT">
    							<img src="Images\BOB.jpg" class="caro-img  img-responsive" alt>
      					      <img src="Images\BB.jpg" class="caro-img  img-responsive" alt>
    						    	<img src="Images\GOT.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\sherlock.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\the-wire.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\stranger-things.jpg" class="caro-img  img-responsive" alt>   								<img src="friends.jpg" class="caro-img  img-responsive" alt>
    				  			<img src="Images\narcos.jpg" class="caro-img  img-responsive" alt>
  					</figure>
				</div>
				<span style="float:left" class="ss-icon" onclick="galleryspin('-','span2')">&lt;</span>
				<span style="float:right" class="ss-icon"  onclick="galleryspin('','span2')">&gt;</span>
				
				
			<br>
			<br>
			<h2 class="heading">Top Rated Anime</h2>
				<hr>
				<div id="carousel">
  					<figure id="spinner" class="spinnerA">
  					 		<img src="Images\fma.jpg" class="caro-img  img-responsive" alt>
      					      <img src="Images\one-punch-man.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\Death-Note.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\op.jpg" class="caro-img  img-responsive" alt>
    							<img src="Images\cowboy-bebop.jpg" class="caro-img  img-responsive" alt>  
    							<img src="Images\avatar.jpg" class="caro-img  img-responsive" alt> 							<img src="hxh.png" class="caro-img  img-responsive" alt>
    				  			<img src="Images\naruto.jpg" class="caro-img  img-responsive" alt>
  					</figure>
				</div>
				<span style="float:left" class="ss-icon" onclick="galleryspin('-','span3')" >&lt;</span>
				<span style="float:right" class="ss-icon" onclick="galleryspin('','span3')">&gt;</span>
				
			<br>
			<br>
			<h2 class="heading">Latest Entertainment News</h2>
				<hr>
				<div class="box">
					<script type="text/javascript" src="http://www.freshcontent.net/entertainment_news_feed.php"></script></span>
			      </div>
			<br>
			<br>
			<div class="our-picks">
				<h2 class="heading">You recently Viewed</h3>
				<hr>
				<div class="row">
					<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\interstellar.jpg" alt="Interstellar">
							<div class="overlay">
           							<h2>Interstellar</h2>
           							<a class="info" href="#">Read More..</a>
        						</div>
        				</div>
        				<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\himym.jpg" alt="How I Met Your Mother">
							<div class="overlay">
           							<h2>How I Met Your Mother</h2>
           							<a class="info" href="#">Read More..</a>
        						</div>
        				</div>
        				<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\Death-Note.jpg" alt="Death Note">
							<div class="overlay">
           							<h2>Death Note</h2>
           							<a class="info" href="#">Read More..</a>
        						</div>
        				</div>
					<div class="hovereffect">
						<img class="col-sm-3 pick-img img-responsive" src="Images\mrRobot.jpg" alt="Mr.Robot">
							<div class="overlay">
           							<h2>Mr. Robot</h2>
           							<a class="info" href="#">Read More..</a>
        						</div>
        			    </div>
        		</div>
			<br>
			<br>
			<div>
				<!--<div class="col-md-4 box">
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
				</div>-->
			</div>
		</div>
	</body> 
</html>            
