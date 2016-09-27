<?php

	$username = $_POST['user_name'];
	$password = $_POST['password'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost","root","");
	mysql_select_db("login_db");

	$result = mysql_query("select * from user_database where UserName = '$username' and Password = '$password'") or die("The query failed!");
	$row = mysql_fetch_array($result);

	if($row['UserName'] == $username && $row['Password'] == $password)
	{
		session_start();
		$_SESSION["FirstName"] = $row['FirstName'];
		$_SESSION["LastName"] = $row['LastName'];
		$_SESSION["Email"] = $row['EmailID'];
		$_SESSION["UserName"] = $row['UserName'];
		$_SESSION["Password"] = $row['Password'];
		$_SESSION["prompt"] = "active";
	}
	else
	{
		$message = "Incorrect username or password";
		echo $message;
	}

?>