<?php

header( 'Content-Type: text/html; charset=utf-8' );

function ses($row){
	setcookie("id", $row['id'], time() + 10800);

	session_start();
	ini_set('session.use_strict_mode', 1);
	foreach ($row as $key => $value) {
		// echo $key." => ".$value."<br>";
		if($key != "login" && $key != "password" && $key != "role_id" && $key != "status_id") {
			$_SESSION[$key] = $value;
			// echo $_SESSION[$key]."<br>";
		}
	}
	echo $_COOKIE['id'];
	$result_3 = mysql_query("UPDATE h_users set `session` = 1 WHERE `id` = '".$_COOKIE['id']."'");
	echo mysql_errno();
	echo mysql_error();
	// $result_3 = mysql_query("UPDATE h_users set `session` = 'TRUE' WHERE `id` = '1'");
	session_write_close();
} 

class DataBase
{
    public static $mConnect;	// Хранит результат соединения с базой данных
    public static $mSelectDB;	// Хранит результат выбора базы данных

    // Метод создает соединение с базой данных
    public static function Connect($host, $user, $pass, $name)
	{
		// Пробуем создать соединение с базой данных
		self::$mConnect = mysql_connect($host, $user, $pass);

		// Если подключение не прошло, вывести сообщение об ошибке..
		if(!self::$mConnect)
		{
			echo "<p><b>К сожалению, не удалось подключиться к серверу MySQL</b></p>";
			exit();
			return false;
		}

		// Пробуем выбрать базу данных
		self::$mSelectDB = mysql_select_db($name, self::$mConnect);

		// Если база данных не выбрана, вывести сообщение об ошибке..
		if(!self::$mSelectDB)
		{
			echo "<p><b>".mysql_error()."</b></p>";
			exit();
			return false;
		}

		// Возвращаем результат
		return self::$mConnect;
	}

    // Метод закрывает соединение с базой данных
	public static function Close()
	{
		// Возвращает результат
		return mysql_close(self::$mConnect);
	}

}

mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
?>