<?php 
$_POST;

if ($_POST['a'] == 1) {
	require_once 'DB.php';

	// $dbhost = '127.0.0.1'; // Хост
	$dbuser = 'heavendb_user'; // Имя пользователя
	$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
	$dbname = 'heaven_db'; // Имя базы данных

	$DB = new DataBase();
	$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

	$result = mysql_query("UPDATE h_users set `session` = 0 WHERE `id` = '".$_COOKIE['id']."'");
	
}else{
	require_once 'DB.php';

	// $dbhost = '127.0.0.1'; // Хост
	$dbuser = 'heavendb_user'; // Имя пользователя
	$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
	$dbname = 'heaven_db'; // Имя базы данных

	$DB = new DataBase();
	$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

	$result = mysql_query("UPDATE h_users set `session` = 0 WHERE `id` = '".$_COOKIE['id']."'");

	echo mysql_errno();
	echo mysql_error();


	// unset($_COOKIE['id']);
	setcookie("id", $row['id'], time() - 10800);
	session_start();
	$_SESSION = array();
	session_write_close();
}

?>