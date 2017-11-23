<?php

session_start();

if (isset($_COOKIE['id']) != false && isset($_SESSION['id']) == false) {
	require_once 'DB.php';

	// $dbhost = '127.0.0.1'; // Хост
	$dbuser = 'heavendb_user'; // Имя пользователя
	$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
	$dbname = 'heaven_db'; // Имя базы данных

	$DB = new DataBase();
	$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

	$result = mysql_query("SELECT * FROM `h_users` WHERE `id` = '".$_COOKIE['id']."'");
	$row = mysql_fetch_assoc($result);

	if ($row['status'] == 1) {

	foreach ($row as $key => $value) {
		if($key != "login" && $key != "password" && $key != "role_id" && $key != "status_id") {
			$_SESSION[$key] = $value;
		}
	}
	}
	session_write_close();
	$DB->Close();

}

?>