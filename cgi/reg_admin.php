<?php

$_POST;

require_once 'DB.php';

$dbhost = '127.0.0.1'; // Хост
$dbuser = 'heavendb_user'; // Имя пользователя
$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
$dbname = 'heaven_db'; // Имя базы данных

$DB = new DataBase();
$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

$result = mysql_query("SELECT * FROM `h_users`");

while (($row = mysql_fetch_assoc($result)) != false) {
	if ($row['login'] == $_POST['login']) {
		$flag = 1;
	}
}

if ($flag != 1) {
	$result = mysql_query("INSERT INTO `h_users` (`login`) values ('".$_POST['login']."')");
	
	foreach ($_POST as $key => $value) {
		
	$result = mysql_query("UPDATE `h_users` SET `".$key."` =`".$value."` WHERE `login` = '".$_POST['login']."'");
	}
}

?>