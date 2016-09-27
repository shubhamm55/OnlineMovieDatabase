<?php

require 'PHPMailer-master/PHPMailerAutoload.php';

$uname = $_POST['username'];

$uname = stripcslashes($uname);

$uname = mysql_real_escape_string($uname);

mysql_connect("localhost","root","");
mysql_select_db("login_db");

$result = mysql_query("select * from user_database where UserName = '$uname'") or die("The query failed!");
$row = mysql_fetch_array($result);

$message = "";

if($row['UserName'] == $uname)
{
	$mail = new PHPMailer;
 
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'kksmail2017@gmail.com';                   // SMTP username
	$mail->Password = 'bestpassword';               // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
	$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
	$mail->setFrom('kksmail2017@gmail.com', 'Pop-Korner');     //Set who the message is to be sent from
	$mail->addReplyTo('kksmail2017@gmail.com', 'Pop-Korner');  //Set an alternative reply-to address
	$mail->addAddress($row['EmailID'], $row['UserName']);  // Add a recipient
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	$mail->isHTML(true);                                  // Set email format to HTML
	 
	$mail->Subject = 'Password Information';
	$mail->Body    = 'Here is your password:'.$row['Password'];

	if(!$mail->send()) 
	{
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}
	 
	$message = "1";
}
else
	$message = "0";

echo $message;

?>