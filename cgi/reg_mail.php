<?php

if(isset($_POST['login'])){


if ($_POST['pass'] == $_POST['cpass']) {
	require_once 'DB.php';

	// $dbhost = '127.0.0.1'; // Хост
	$dbuser = 'heavendb_user'; // Имя пользователя
	$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
	$dbname = 'heaven_db'; // Имя базы данных

	$DB = new DataBase();
	$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

	$result = mysql_query("SELECT `login` FROM `h_users`");

	while (($row = mysql_fetch_assoc($result)) != false) {
		if ($row['login'] == $_POST['login']) {
			$flag = 1;
		}
	}
		// echo "nice";

	if ($flag != 1) {
		$data_ = json_encode($_POST);
		$data = base64_encode($data_);


		$message = "Подтвердите регестрацию перейдя по ссылке http://address-forever.com/cgi/reg_mail.php?data=$data";
		$to = $_POST['mail'];
		$from = "iseralion@gmail.com";
		// $subject = "тема сообщения";
		$subject = "Здравствуйте!

У вас есть новое уведомление от address-forever.";
		$subject = "=?utf-8?b?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";

		
		$result = mail($to, $subject, $message, $headers);
		
		echo "<script>alert('К вам на почту отправлено письмо для подтверждения регистрации!')</script>";

		
	}else{
		
		echo "<script>alert('Такой аккайнт уже существует!')</script>";
		}

	

}else{
		echo "<script>alert('Пароли не совпадают!')</script>";
		}

require_once '../index.php';
}


//------------------------------------------------------------------


if(isset($_GET['data'])){

$temp = $_GET['data'];

$data = base64_decode($temp);
$data_2 = json_decode($data, true);

// print_r($data_2);

require_once 'DB.php';

// $dbhost = '127.0.0.1'; // Хост
$dbuser = 'heavendb_user'; // Имя пользователя
$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
$dbname = 'heaven_db'; // Имя базы данных

$DB = new DataBase();
$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

if(isset($data_2['company']) == false){
	$result = mysql_query("SELECT `login` FROM `h_users`");
	$result_ = mysql_query("SELECT * FROM `h_users` WHERE `login` = '".$data_2['login']."'");
}else{
	$result = mysql_query("SELECT `login` FROM `h_partner`");
	$result_ = mysql_query("SELECT * FROM `h_partner` WHERE `login` = '".$data_2['login']."'");
}

while (($row = mysql_fetch_assoc($result)) != false) {
		
	if ($row['login'] == $data_2['login']) {
		$flag = 1;

		// $result_ = mysql_query("SELECT * FROM `h_users` WHERE `login` = '".$data_2['login']."'");
		$row = mysql_fetch_assoc($result_);

		ses($row);
		header("Location:../personal_room.php");
	}
}

if ($flag != 1) {

if(isset($data_2['company']) == false){
$result = mysql_query("INSERT INTO  `h_users` (  `login` ,  `password` ,  `firstName` ,  `lastName` , `middleName` , `role_id` ,  `status_id`, `mail`, `session` ) 
VALUES (
'".$data_2['login']."',  '".$data_2['pass']."',  '".$data_2['firstName']."',  '".$data_2['lastName']."', '".$data_2['middleName']."',  '".$data_2['role']."',  '1', '".$data_2['mail']."' , 1
)");

$result_ = mysql_query("SELECT * FROM `h_users` WHERE `login` = '".$data_2['login']."'");
}
else if(isset($data_2['company']) == true){
	$result = mysql_query("INSERT INTO  `h_partner` ( `company` ,`login` ,  `password` ,  `firstName` ,  `lastName` , `middleName` , `role_id` ,  `status_id`, `mail`, `session` ) 
VALUES (
 '".$data_2['company']."' ,'".$data_2['login']."',  '".$data_2['pass']."',  '".$data_2['firstName']."',  '".$data_2['lastName']."', '".$data_2['middleName']."',  '".$data_2['role']."',  '1', '".$data_2['mail']."' , 1
)");
$result_ = mysql_query("SELECT * FROM `h_partner` WHERE `login` = '".$data_2['login']."'");
}

$row = mysql_fetch_assoc($result_);
       
ses($row);

    
header("Location:../personal_room.php");
}

}

// $_GET;

//  $temp = $_GET['data'];

// $data = base64_decode($temp);
// $data_2 = json_decode($data, true);

// echo $data_2['role'].' nice' ; 
?>