<?php

header( 'Content-Type: text/html; charset=utf-8' );

// function ses($row){
// 	setcookie("id", $row['id'], time() + 10800);

// 	session_start();
// 	ini_set('session.use_strict_mode', 1);
// 	foreach ($row as $key => $value) {
// 		// echo $key." => ".$value."<br>";
// 		if($key != "login" && $key != "password" && $key != "role_id" && $key != "status_id") {
// 			$_SESSION[$key] = $value;
// 			// echo $_SESSION[$key]."<br>";
// 		}
// 	}
// 	session_write_close();
// } 

$_POST;

// echo phpinfo();

require_once 'DB.php';

// $dbhost = '127.0.0.1'; // Хост
$dbuser = 'heavendb_user'; // Имя пользователя
$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
$dbname = 'heaven_db'; // Имя базы данных

$DB = new DataBase();
$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);
// echo "nice";

mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");

// Выполняет запрос к базе данных
$result = mysql_query("SELECT * FROM `h_users` where `login` = '".$_POST['login']."'");

// Обрабатывает ряд результата запроса и возвращает ассоциативный массив
// $row = mysql_fetch_assoc($result);

// Выводит версию сервера MySQL
// echo $_POST['login']."<br>".$_POST['pass']."<br><br>";
// echo "nice<br>".$row['login']."<br>".$row['password']."<br>".$row['status_id']."<br>".$row['role_id'];

// while (($row = mysql_fetch_assoc($result)) != false) {
$row = mysql_fetch_assoc($result);
	// echo "<script>alert('".$row['status_id']."')</script>";
	// $row['firstName'] = base64_encode($row['firstName']);
	if ($_POST['login'] == $row['login'] && $_POST['pass'] == $row['password']) {

		
		if ($row['status_id'] == 1) {


			if ($row['role_id'] == 1) {
			// echo "<script>alert('".$row['login']." kek kek')</script>";
				// echo mb_substr($row['firstName'], 0, 7, "UTF-8"); 
				// echo $row['firstName'];
				// setcookie("login", $row['login'], time() + 10800);

				// session_start();
				// foreach ($row as $key => $value) {
				// 	// echo $key." => ".$value."<br>";
				// 	if($key != "id" && "login" && "password") {
				// 	$_SESSION[$key] = $value;
				// 	// echo $_SESSION[$key]."<br>";
				// 	}
				// }

				ses($row);
				
				// header("Location:../root-admin.php");
			}
			if ($row['role_id'] == 14) {
				// echo mb_substr($row['firstName'], 0, 7, "UTF-8"); 
				// echo $row['firstName'];
				ses($row);
				
				header("Location:../personal_room.php");
			}
			if ($row['role_id'] == 10) {
				// echo mb_substr($row['firstName'], 0, 7, "UTF-8"); 
				// echo $row['firstName'];
				ses($row);
				
				header("Location:../partner/partner-main.php");
			}
			if ($row['role_id'] == 2) {
				// echo mb_substr($row['firstName'], 0, 7, "UTF-8"); 
				// echo $row['firstName'];
				ses($row);
				
				header("Location:../admin/admin-main.php");
			}
		}
		else{
		// // 	require_once '../index.php';
		// // echo "<script>alert('Данный аккаунт не доступен!')</script>";
			$er = "<script>alert('Данный аккаунт не доступен!')</script>";
			require_once '../index.php';
		}
	}
	else{
		// require_once '../index.php';
		// echo "<script>alert('Введенные данные не верны!')</script>";
			require_once '../index.php';
			$er = "<script>alert('Введенные данные не верны!')</script>";
	}
// }

echo $er;


$DB->Close();



?>