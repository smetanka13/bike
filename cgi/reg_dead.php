<?php 


require_once 'DB.php';

// $dbhost = '127.0.0.1'; // Хост
$dbuser = 'heavendb_user'; // Имя пользователя
$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
$dbname = 'heaven_db'; // Имя базы данных

$DB = new DataBase();
$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);


if (isset($_POST['deafDate'])) {

$_FILES; $_POST;
// $result = mysql_query("SELECT `login` FROM `h_users`");
print_r($_FILES['image_prof']);
echo "<br>";
print_r($_POST);

$uploaddir = '../upload/';
if ($_FILES['image_prof']['size'] != 0) {
$uploadfile = $uploaddir ."picture/". basename($_FILES['image_prof']['name']);
move_uploaded_file($_FILES['image_prof']['tmp_name'], $uploadfile);
echo "nice";
}
if ($_FILES['image_gall']['size'] != 0) {
$uploadfile = $uploaddir ."picture/". basename($_FILES['image_gall']['name']);
move_uploaded_file($_FILES['image_gall']['tmp_name'], $uploadfile);
}
if ($_FILES['video']['size'] != 0) {
$uploadfile = $uploaddir ."video/". basename($_FILES['video']['name']);
move_uploaded_file($_FILES['video']['tmp_name'], $uploadfile);
}


$result = mysql_query("INSERT INTO  `h_users` (`login` , `password` , `mail` , `firstName` ,  `lastName` , `middleName` , `role_id` ,  `status_id`, `birthDate`, `deafDate`, `biography`) 
VALUES (
'10' , '10' , '10' , '".$_POST['firstName']."',  '".$_POST['lastName']."', '".$_POST['middleName']."',  '14',  '3', '".$_POST['birthDate']."', '".$_POST['deafDate']."', '".$_POST['biography']."'
)");

echo mysql_errno();
echo "<br>";
echo mysql_error();

$result = mysql_query("SELECT `id` FROM `h_users` WHERE `birthDate` =  '".$_POST['birthDate']."' AND `deafDate` =  '".$_POST['deafDate']."'");
$row = mysql_fetch_assoc($result);
echo mysql_errno();
echo "<br>";
echo mysql_error();

session_start();
$result = mysql_query("INSERT INTO  `h_dead` (`id_live` ,  `id_dead`) 
VALUES (
'".$_SESSION['id']."', '".$row['id']."'
)");
echo mysql_errno();
echo "<br>";
echo mysql_error();
}
else{
	session_start();
	$result = mysql_query("SELECT `id_dead` FROM `h_dead` WHERE `id_live` =  '".$_SESSION['id']."'");
$data;
// echo mysql_errno();
// echo "<br>";
// echo mysql_error();
	// while (($row = mysql_fetch_assoc($result)) != false) {
	$row = mysql_fetch_assoc($result);
	// echo $row['id_dead'];
	// echo $result;
		$result_2 = mysql_query("SELECT `id`, `firstName` ,  `lastName` , `middleName` , `birthDate`, `deafDate`, `biography` FROM `h_users` WHERE `id` = '".$row['id_dead']."'");
// 		echo mysql_errno();
// echo "<br>";
// echo mysql_error();
$i = 0;
	while (($row = mysql_fetch_assoc($result_2)) != false) {
		// $temp = $row;

		// array_push($data, $row);
		$data[$i] = $row;
		$i++;

	}
$data_2 = json_encode($data);
echo $data_2;
// echo "nice";
}


?>