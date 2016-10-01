<?php

	$user = $_POST['user'];
	$id = $_POST['id'];
	$extra = $_POST['extra'];

	$user = stripcslashes($user);
	$id = stripcslashes($id);
	$extra = stripcslashes($extra);
	$user = mysql_real_escape_string($user);
	$id = mysql_real_escape_string($id);
	$extra = mysql_real_escape_string($extra);

	mysql_connect("localhost","root","");
	mysql_select_db("login_db");

	$result = mysql_query("select * from user_priorities where UserName = '$user' and ID = '$id'") or die("The query failed!");
	$row = mysql_fetch_array($result);

	if($row['UserName'] == $user && $row['ID'] == $id)
	{
		$update = mysql_query("update user_priorities set TimeStamp=CURRENT_TIMESTAMP where UserName = '$user' and ID = '$id'") or die("The query failed!");
	}
	else
	{
		$comments = 'NO COMMENTS YET';
		$rating = 0;
		$favourite = 'N';
		$insert = mysql_query("insert into user_priorities values('$user','$id','$comments','$rating','$favourite','$favourite','$extra',CURRENT_TIMESTAMP)") or die("The query failed!");
	}
?>