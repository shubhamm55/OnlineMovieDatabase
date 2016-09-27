<html>
	<head>
		<title>Movie DB</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<style>

		#udbtn:hover{
			border-color: transparent;
		}

		#close:hover{
			background-color: #d52d54;
		}

		</style>
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
	  			<li><a href="TV_Shows.html">TV Shows</a></li>
	  			<li><a href="anime.html">Anime</a></li>
			</ul>

			<br>
			<br>

			<div class="profileBox" style="font-size: 30px;position: relative;height: 450px;widht: 100%">
				<img class="img-responsive" src="#" alt="User Pic here" height="400px" width="400px">
				<a id="updt" href="#" data-toggle="modal" data-target="#update">
					<button id="udbtn" style="height: 60px;width: 60px;background-color: #ffe695;border-radius: 30px;position: absolute;top: 40px;left: 1000px;">
						<span class="glyphicon glyphicon-pencil" style="color: black">
						</span>
					</button>
				</a>
				<label style="position: absolute;top: 100px;left: 520px">Full Name: <?php echo $_SESSION["FirstName"] . " " . $_SESSION["LastName"];?></label>
				<label style="position: absolute;top: 150px;left: 520px">Email-ID: <?php echo $_SESSION["Email"];?></label>
				<label style="position: absolute;top: 200px;left: 520px">Username: <?php echo $_SESSION["UserName"];?></label>
				<label style="position: absolute;top: 250px;left: 520px">Password: <?php echo $_SESSION["Password"];?></label>
			</div>
		</div>

		<div id="update" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
	      			<div class="modal-header" style="background-color: #ffe695;color:black">
	    				<button type="button" class="close" data-dismiss="modal" style="color: white">&times;</button>
	        			<h4 class="modal-title">Update Details</h4>
	    			</div>
		        	<div class="modal-body" style="color: #ffe695;background-color: maroon;position: relative">
		        		<form id="rtpwd" method="POST" action="Update.php">
        					<div style="position: relative">
								<div style="margin-bottom: 25px" class="input-group">
		                            <label>First Name: </label>
		                            <input id="fname" type="text" class="form-control" name="fname" value="" placeholder="First Name">
		                        </div>
		                        <p class="validate" id="chkfname" size="50" style="position: absolute;top: 35px"></p>
	                    	</div>
	    					<div style="position: relative">                	
							  	<div style="margin-bottom: 25px" class="input-group">
		                            <label>Last Name: </label>
		                            <input id="lname" type="text" class="form-control" name="lname" value="" placeholder="Last Name">
		                        </div>
		                        <p class="validate" id="chklname" size="50" style="position: absolute;top: 35px"></p>
	                        </div>
	                        <div style="position: relative">
		                        <div style="margin-bottom: 25px" class="input-group">
		                            <label>Email ID: </label>
		                            <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email ID">
		                        </div>
		                        <p class="validate" id="chkemail" size="50" style="position: absolute;top: 35px"></p>
	                        </div>
	                        <div style="position: relative">
		                        <div style="margin-bottom: 25px" class="input-group">
		                            <label>Username: </label>
		                            <input id="username" type="text" class="form-control" name="username" value="" placeholder="Username">
		                        </div>
	                        	<p class="validate" id="chkuname" size="50" style="position: absolute;top: 35px"></p>
	                    	</div>
	                    	<div style="position: relative">
		                        <div style="margin-bottom: 25px" class="input-group">
		                            <label>Password: </label>
		                            <input id="pwd1" type="password" class="form-control" name="pwd1" value="" placeholder="Password">
		                        </div>
		                        <p class="validate" id="chkpwd" size="50" style="position: absolute;top: 35px"></p>
	                        </div>
                    	</form>
		      		</div>
		      		<div class="modal-footer" style="background-color: black">
		        		<button id="close" type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #ffe695;color: black">Close</button>
		    		</div>
	    		</div>
			</div>
		</div>
	</body> 
</html>            
