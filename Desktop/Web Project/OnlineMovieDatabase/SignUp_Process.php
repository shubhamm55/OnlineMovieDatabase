<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$uname = $_POST['username'];
$password = $_POST['pwd1'];

$fname = stripcslashes($fname);
$lname = stripcslashes($lname);
$email = stripcslashes($email);
$uname = stripcslashes($uname);
$password = stripcslashes($password);
$fname = mysql_real_escape_string($fname);
$lname = mysql_real_escape_string($lname);
$email = mysql_real_escape_string($email);
$uname = mysql_real_escape_string($uname);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("login_db");

$result = mysql_query("select * from user_database where UserName = '$uname'") or die("The query failed!");
$row = mysql_fetch_array($result);

if($row['UserName'] == $uname)
{
	$message = "Username already exists";
}

else
{	
	$insert = mysql_query("insert into user_database values('$fname','$lname','$email','$uname','$password')") or die("The query failed!");
	$message = "Registration Successful!";
}

echo $message;

?>