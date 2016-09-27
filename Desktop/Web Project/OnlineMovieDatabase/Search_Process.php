<?php

$search = $_POST['search'];

$search = stripcslashes($search);

$search = mysql_real_escape_string($search);

$hint = "";

mysql_connect("localhost","root","");
mysql_select_db("login_db");

$result = mysql_query("select * from user_database where FirstName like '%$search%' LIMIT 3") or die("The query failed!");

while($row = mysql_fetch_array($result))
{
	if($hint == "")
		$hint = '<p style="color: red">' . $row['FirstName'] . '</p>';
	else
		$hint = $hint . '<br><p style="color: red">' . $row['FirstName'] . '</p>';
}

if($hint == "")
	echo "No such value";
else
	echo $hint;
?>


