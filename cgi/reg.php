<?php

// if(isset($_GET)){

// $temp = $_GET['data'];



// $data = base64_decode($temp);


// $data_2 = json_decode($data, true);


// require_once 'DB.php';

// // $dbhost = '127.0.0.1'; // Хост
// $dbuser = 'heavendb_user'; // Имя пользователя
// $dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
// $dbname = 'heaven_db'; // Имя базы данных

// $DB = new DataBase();
// $DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

// $result = mysql_query("SELECT `login` FROM `h_users`");

// while (($row = mysql_fetch_assoc($result)) != false) {
		
// 	if ($row['login'] == $data_2['login']) {
// 		$flag = 1;
// 	}
// }

// if ($flag != 1) {

// 	$result = mysql_query("INSERT INTO  `h_users` (  `login` ,  `password` ,  `firstName` ,  `lastName` ,  `role_id` ,  `status_id`, `mail` ) 
// VALUES (
// '".$data_2['login']."',  '".$data_2['pass']."',  'Test',  'Test_2',  '14',  '1', '".$data_2['mail']."' 
// )");


//  $result_ = mysql_query("SELECT * FROM `h_users` WHERE `login` = '".$data_2['login']."'");

//         $row = mysql_fetch_assoc($result_);
       
//         ses($row);

    
// header("Location:../personal_room.php");
// }
// }


?>