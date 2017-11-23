<?php 

// echo phpinfo();
// echo $_COOKIE['id'];
require_once 'DB.php';

	// $dbhost = '127.0.0.1'; // Хост
	$dbuser = 'heavendb_user'; // Имя пользователя
	$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
	$dbname = 'heaven_db'; // Имя базы данных

	$DB = new DataBase();
	$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

	$result = mysql_query("SELECT * FROM h_users WHERE `id` = '".$_COOKIE['id']."'");
	echo mysql_errno();
	echo "<br>";
	echo mysql_error();
	echo "<br>";
	
	echo $_COOKIE['id'];

	$row = mysql_fetch_assoc($result);
	
	echo $row['login'];
	echo "<br>";
	echo $row['session'];
	print_r($row);
	echo "<br>";
	if ($row['session'] == false) {
		echo "nice";
	echo "<br>";
	}else{
		echo "ne nice";
	echo "<br>";
	}if ($row['session'] == true) {
		echo "nice";
	echo "<br>";
	}else{
		echo "ne nice";
	echo "<br>";
	}
	echo "<br>";

	echo "nice_2";
// $_POST;

// $file = fopen(a.txt, "a+t");

// fwrite($file, $_POST['login']);
// fclose($file);

// echo "nice\n";
// echo $_POST['login'];

?>