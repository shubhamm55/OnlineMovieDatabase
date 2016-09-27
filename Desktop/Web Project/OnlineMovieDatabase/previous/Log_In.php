<!DOCTYPE html>

<html lang="en">
	
	<head>

		<title>Sign In</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="whhg.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<script src="Authentication.js"></script>

		<style>

			.panel-default{
				position: absolute;
				top: 160px;
				left: 920px;
				width: 320px;
				height: 320px;			}

			.container-fluid{
				position: relative;
			}

			#submit{
				background-color: maroon;
				border-color: transparent;
				color:#ffe695;
			}

			#submit:hover{
				background-color: #d52d54;
				border-color: transparent;
			}

			#joinus{
				text-decoration: none;
				color: #763626;
				font-size: 15px
			}

			#joinus:hover{
				text-decoration: none;
				color: #585868;
				font-size: 15px
			}

			#fgpwd{
				color: #000000;
				text-decoration: none
			}

			#fgpwd:hover{
				color: #cc2533;
				text-decoration: none;
				border-color: transparent;
			}

			#enter{
				position: absolute;
				font-size: 18px;
				top: 15px;
				left: 430px;
			}

			#alert{
				position: absolute;
				font-size: 15px;
				top: 50px;
				left: 150px;
				color: #873626;
			}

			.validate{
				border-bottom: 0px black;
				color: #874737;
				font-size: 10px;
			}

		</style>
	
	</head>

	<body style="background-image: url(backdrop.jpg);background-repeat: no-repeat;background-size: 100% 100%;font-family: 'Lobster Two';background-attachment: fixed">

		<div class="container-fluid">
			<div class="panel panel-default" style="background: rgba(255,255,255,0.5)">
	  			<div class="panel-body">
	 				<div style="font-size: 20px;text-align: center"><p>Sign In</p></div>
	 				<p id="txtHint" style="font-size: 15px;color: maroon;text-align: center"></p>
	 				<p id="php" style:"font-size: 15px;color: #000000"></p>
	 				<form id="sign_in">
                    	<div style="position: relative">
							<div style="margin-bottom: 25px" class="input-group">
	                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                            <input id="user_name" type="text" class="form-control" name="user_name" value="" placeholder="Username">
	                        </div>
	                        <p class="validate" id="chkuname" size="50" style="position: absolute;top: 35px"></p>
                        </div>
					  	<div style="position: relative">
						  	<div style="margin-bottom: 25px" class="input-group">
	                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
	                        </div>
	                        <p class="validate" id="chkpwd" size="50" style="position: absolute;top: 35px"></p>
                        </div>
					  	<button id="submit" type="button" class="btn btn-default btn-block" onclick="login()">Submit</button>
					  	<br>
					  	<div style="font-size: 12px;text-align: right">
					  		<a id="fgpwd" href="#" data-toggle="modal" data-target="#frgtpwd">Forgot Password?</a>
				  		</div>
					</form>
					<div id="message" style="position: absolute;top: 280px;left: 60px">
						<p style="font-size: 15px">Don't have an account? <a id="joinus" href="Trial_SignUp.html">JOIN US</a></p>
					</div>
	 			</div>
			</div>

			<div id="frgtpwd" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
		      			<div class="modal-header" style="background-color: #dab760">
		    				<button type="button" class="close" data-dismiss="modal">&times;</button>
		        			<h4 class="modal-title">Password Retrieval</h4>
		    			</div>
			        	<div class="modal-body" style="background-color: #ffdb58;position: relative">
			        		<br>
			        		<form class="form-inline" id="rtpwd" method="POST" action="Forgot_Password_Process.php">
	        					<div style="margin-bottom: 25px" class="form-group">
	                            	<label for="username" style="font-size: 20px;position: absolute;top: 20px;left: 40px">Username: </label>
	                            	<input id="username" type="text" class="form-control" name="username" placeholder="Enter username" style="font-size: 20px;position: absolute;top: 17px;left: 150px"> 
	                        		<p id="alert"></p>
	                        		<button id="enter" class="btn btn-default" type="button" onclick="chkpwd(this)">RETRIEVE</button>
	                        	</div>
                        	</form>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #dab760">Close</button>
			    		</div>
		    		</div>
				</div>
			</div>
		</div>
	</body>

</html>