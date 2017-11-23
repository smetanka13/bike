<?php

require_once 'DB.php';

// $dbhost = '127.0.0.1'; // Хост
$dbuser = 'heavendb_user'; // Имя пользователя
$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
$dbname = 'heaven_db'; // Имя базы данных

$DB = new DataBase();
$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

$result = mysql_query("SELECT `id`, `firstName` ,  `lastName` , `middleName` , `birthDate`, `deafDate`, `biography` FROM `h_users` WHERE `role_id` = '2'");
// 		echo mysql_errno();
// echo "<br>";
// echo mysql_error();
$i = 0;
	while (($row = mysql_fetch_assoc($result)) != false) {
		// $temp = $row;

		// array_push($data, $row);
		$data[$i] = $row;
		$i++;

	}
	$result = mysql_query("SELECT `id`, `firstName` ,  `lastName` , `middleName` , `birthDate`, `deafDate`, `biography` FROM `h_partner` WHERE `role_id` = '10'");
// 		echo mysql_errno();
// echo "<br>";
// echo mysql_error();
// $i = 0;
	while (($row = mysql_fetch_assoc($result)) != false) {
		// $temp = $row;

		// array_push($data, $row);
		$data[$i] = $row;
		$i++;

	}
$data_2 = json_encode($data);
echo $data_2;



?>