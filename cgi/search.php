<?php 

$_POST;

print_r($_POST);

if ($_POST['birthDate'] != null || $_POST['deafDate'] != null || $_POST['country'] != null || $_POST['city'] != null) {
$request = "WHERE ";
}

if ($_POST['birthDate'] != null) {
	$request = $request." `birthDate` = ".$_POST['birthDate'];
	$coma = " AND ";
}

if ($_POST['deafDate'] != null) {
	$request = $coma.$request." `deafDate` = ".$_POST['deafDate'];
	$coma = " AND ";
}

if ($_POST['country'] != null) {
	$request = $coma.$request." `country` = ".$_POST['country'];
	$coma = " AND ";
}


if ($_POST['city'] != null) {
	$request = $coma.$request." `city` = ".$_POST['city'];
	$coma = " AND ";
}

require_once 'DB.php';

// $dbhost = '127.0.0.1'; // Хост
$dbuser = 'heavendb_user'; // Имя пользователя
$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
$dbname = 'heaven_db'; // Имя базы данных

$DB = new DataBase();
$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

$result = mysql_query("SELECT `id`, `firstName` ,  `lastName` , `middleName` , `birthDate`, `deafDate`, `biography` FROM `h_users` ".$request."");

$search = preg_split(" ", $_POST['search']);
$data;

while (($row = mysql_fetch_assoc($result)) != false) {
	for($i = 0;$i < count($search);$i++){
		if ($search[$i] == $row['lastName']) {
			for($j = 0;$j < count($data);$j++){
				if ($search[$i] == $datd[$j]['lastName']) {
					$flag = 1;
				}
			}
			if ($flag != 1) {
				array_push($data, $row);
			}
		}
		if ($search[$i] == $row['firstName']) {
			for($j = 0;$j < count($data);$j++){
				if ($search[$i] == $datd[$j]['firstName']) {
					$flag = 1;
				}
			}
			if ($flag != 1) {
				array_push($data, $row);
			}
		}
		if ($search[$i] == $row['middleName']) {
			for($j = 0;$j < count($data);$j++){
				if ($search[$i] == $datd[$j]['middleName']) {
					$flag = 1;
				}
			}
			if ($flag != 1) {
				array_push($data, $row);
			}
		}
	}
}

$data_2 = json_encode($data);
echo $data_2;
?>