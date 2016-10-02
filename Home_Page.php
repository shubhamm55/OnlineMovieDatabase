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
							$user = $_SESSION['UserName'];
							echo '<li><a href="User_Profile.php">' . $_SESSION["UserName"] . '</a></li>
							<li><a href="#">WishList</a></list>
							<li><a href="#">Favourites</a></list>
							<li class="divider"></li>
							<li><a href="Logout.php">Sign Out  <span class="glyphicon glyphicon-log-out"></span></a></li>
						';
						}
						
						else
						{
							$user = "Guest";
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
		<div class="row">
			<ul class="nav nav-pills col-md-9">
	  			<li class="active"><a href="Home_Page.php" >Home</a></li>
	  			<li><a onclick="javascript:document.getElementById('page_loader').style.display='block';" href="Movies.php">Movies</a></li>
	  			<li><a href="TV_Shows.html">TV Shows</a></li>
	  			<li><a href="anime.html">Anime</a></li>
			</ul>
			<div class="search-bar col-md-3">
				<form method="POST" action="Search_Page.php">
					<input type="text" placeholder="Search" name="search" id="search">
					<button type="submit" class="search-btn"><span class="glyphicon glyphicon-search">&nbsp;</button>
				</form>
			</div>
		</div>
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
				<div class="container caro">
						<div id="carousel">
							<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/pulp-fiction.jpg" alt="Pulp-Fiction">
								<div class="overlay">
           								<h2>Pulp Fiction</h2>
           								<a class="info" href="Movie_Landing.php?id=680">Read More..</a>
        							</div>
        						</div></figure>
							<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/Godfather.jpg" alt="Godfather">
								<div class="overlay">
           								<h2>The Godfather</h2>
           								<a class="info" href="Movie_Landing.php?id=238">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/fight-club.jpg" alt="Fight Club">
								<div class="overlay">
           								<h2>Fight Club</h2>
           								<a class="info" href="Movie_Landing.php?id=550">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/DarkKnight.jpg" alt="Dark Knight">
								<div class="overlay">
           								<h2>The Dark Knight</h2>
           								<a class="info" href="Movie_Landing.php?id=155">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/12-angry-men.jpg" alt="12 Angry Men">
								<div class="overlay">
           								<h2>12 Angry Men</h2>
           								<a class="info" href="Movie_Landing.php?id=389">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/shawshank.jpg" alt="The Shawshank Redemption">
								<div class="overlay">
           								<h2>The Shawshank Redemption</h2>
           								<a class="info" href="Movie_Landing.php?id=278">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/lotr.jpg" alt="Lord Of The Rings">
								<div class="overlay">
           								<h2>Lord Of The Rings : Return Of The King</h2>
           								<a class="info" href="Movie_Landing.php?id=122">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/gbu.jpg" alt="The Good, the Bad and the Ugly">
								<div class="overlay">
           								<h2>The Good, the Bad and the Ugly </h2>
           								<a class="info" href="Movie_Landing.php?id=429">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/schindlers-list.jpg" alt="Schindler's List">
								<div class="overlay">
           								<h2>Schindler's List</h2>
           								<a class="info" href="Movie_Landing.php?id=424">Read More..</a>
        							</div>
        						</div></figure>
						</div>
					</div>
				<!--<div id="carousel">
  					<figure id="spinner" class="spinnerM">
    							<img src="shawshank.jpg" class="caro-img"  img-responsive" alt>
      					      <img src="Godfather.jpg" class="caro-img  img-responsive" alt>
    						    	<img src="DarkKnight.jpg" class="caro-img  img-responsive" alt>
    							<img src="schindlers-list.jpg" class="caro-img  img-responsive" alt>
    							<img src="12-angry-men.jpg" class="caro-img  img-responsive" alt>
    							<img src="pulp-fiction.jpg" class="caro-img  img-responsive" alt>   								<img src="fight-club.jpg" class="caro-img  img-responsive" alt>
    				  			<img src="lotr.jpg" class="caro-img  img-responsive" alt>
  					</figure>
				</div>
				<span style="float:left" class="ss-icon" onclick="galleryspin('-','span1')">&lt;</span>
				<span style="float:right" class="ss-icon" onclick="galleryspin('','span1')">&gt;</span>-->
				
				<br>
			<br>
			<h2 class="heading">Top Rated TV Shows</h2>
				<hr>
					<div class="container caro">
						<div id="carousel">
							<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/BB.jpg" alt="Breaking Bad">
								<div class="overlay">
           								<h2>Breaking Bad</h2>
           								<a class="info" href="TV_Landing.php?id=1396">Read More..</a>
        							</div>
        						</div></figure>
							<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/GOT.jpg" alt="Game Of Thrones">
								<div class="overlay">
           								<h2>Game Of Thrones</h2>
           								<a class="info" href="TV_Landing.php?id=1399">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/BOB.jpg" alt="Band Of Brothers">
								<div class="overlay">
           								<h2>Band Of Brothers</h2>
           								<a class="info" href="TV_Landing.php?id=4613">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/the-wire.jpg" alt="The Wire">
								<div class="overlay">
           								<h2>The Wire</h2>
           								<a class="info" href="TV_Landing.php?id=1438">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/td.jpg" alt="True Detective">
								<div class="overlay">
           								<h2>True Detective</h2>
           								<a class="info" href="TV_Landing.php?id=46648">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/friends.jpg" alt="Friends">
								<div class="overlay">
           								<h2>Friends</h2>
           								<a class="info" href="TV_Landing.php?id=1668">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/sherlock.jpg" alt="Sherlock">
								<div class="overlay">
           								<h2>Sherlock</h2>
           								<a class="info" href="TV_Landing.php?id=19885">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/jo.jpg" alt="Last Week Tonight with John Oliver ">
								<div class="overlay">
           								<h2>Last Week Tonight with John Oliver </h2>
           								<a class="info" href="TV_Landing.php?id=60694">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/fargo.jpg" alt="Fargo">
								<div class="overlay">
           								<h2>Fargo</h2>
           								<a class="info" href="TV_Landing.php?id=60622">Read More..</a>
        							</div>
        						</div></figure>
						</div>
					</div>
				
			<br>
			<br>
			<h2 class="heading">Celebrities in Focus</h2>
				<hr>
					<div class="container caro">
						<div id="carousel">
							<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/srk.jpg" alt="Shahrukh Khan">
								<div class="overlay">
           								<h2>Shahrukh Khan</h2>
           								<a class="info" href="celeb_landing.php?id=35742">Read More..</a>
        							</div>
        						</div></figure>
							<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/mf.jpg" alt="Morgan Freeman">
								<div class="overlay">
           								<h2>Morgan Freeman</h2>
           								<a class="info" href="celeb_landing.php?id=192">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/ec.jpg" alt="Emilia Clarke">
								<div class="overlay">
           								<h2>Emilia Clarke</h2>
           								<a class="info" href="celeb_landing.php?id=1223786">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/ak.jpg" alt="Aamir Khan">
								<div class="overlay">
           								<h2>Aamir Khan</h2>
           								<a class="info" href="celeb_landing.php?id=52763">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/cn.jpg" alt="Christopher Nolan">
								<div class="overlay">
           								<h2>Chirstopher Nolan</h2>
           								<a class="info" href="celeb_landing.php?id=525">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/jl.jpg" alt="Jennifer Lawrence">
								<div class="overlay">
           								<h2>Jennifer Lawrence</h2>
           								<a class="info" href="celeb_landing.php?id=72129">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/cp.jpg" alt="Chris Pratt">
								<div class="overlay">
           								<h2>Chris Pratt</h2>
           								<a class="info" href="celeb_landing.php?id=73457">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/rk.jpg" alt="Ranbir Kapoor">
								<div class="overlay">
           								<h2>Ranbir Kapoor</h2>
           								<a class="info" href="celeb_landing.php?id=85034">Read More..</a>
        							</div>
        						</div></figure>
        						<figure><div class="hovereffect">
							<img class="img-responsive caro-img" src="Images/pc.jpg" alt="Priyanka Chopra">
								<div class="overlay">
           								<h2>Priyanka Chopra</h2>
           								<a class="info" href="celeb_landing.php?id=77234">Read More..</a>
        							</div>
        						</div></figure>
						</div>
					</div>
				
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
					<?php
					if($user != "Guest")
					{
						include('Database API\tmdb-api.php');
		                include('Database API\Configuration\default.php');
		                $tmdb = new TMDB($cnf);
						mysql_connect("localhost","root","");
						mysql_select_db("login_db");
						$i = 0;
						$result = mysql_query("select * from user_priorities where UserName = '$user' order by TimeStamp DESC") or die("The query failed!");
						while($row = mysql_fetch_array($result))
						{
							$i = $i+1;
							if($row['Extra'] == 'M')
							{
								$movie = $tmdb->getMovie($row['ID']);
								echo '<div class="hovereffect">
								<img class="col-sm-3 pick-img img-responsive" src="'. $tmdb->getImageURL('w185') . $movie->getPoster() .'" alt="Interstellar">
									<div class="overlay">
		           							<h2>' . $movie->getTitle() . '</h2>
		           							<a class="info" href="Movie_Landing.php?id=' . $movie->getID() . '" onclick="return priority(\'' . $movie->getID() . '\',\'' . $user . '\',\'M\')">Read More..</a>
		        						</div>
		        				</div>';
	        				}
	        				else
	        				{
	        					$tvshow = $tmdb->getTVShow($row['ID']);
								echo '<div class="hovereffect">
								<img class="col-sm-3 pick-img img-responsive" src="'. $tmdb->getImageURL('w185') . $tvshow->getPoster() .'" alt="Interstellar">
									<div class="overlay">
		           							<h2>' . $tvshow->getName() . '</h2>
		           							<a class="info" href="#">Read More..</a>
		        						</div>
		        				</div>';	
	        				}
        					if($i == 4)
        						break;
						}
					}
					else
					{	
					
					echo'<div class="hovereffect">
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
        			    </div>';
    			    }
    			    ?>
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
	</body> 
</html>            
