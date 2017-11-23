<?php

$client_id = "6194740";
$client_secret = "bIADn4PCYwcOxpsl0yRr";
$redirect_uri = "http://address-forever.com/cgi/vk_auth.php";

$url = 'http://oauth.vk.com/authorize';

// $params = array(
//     'client_id'     => $client_id,
//     'redirect_uri'  => $redirect_uri,
//     'response_type' => 'code'
// );

// echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через ВКонтакте</a></p>';

if (isset($_GET['code'])) {
    $params = array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri
    );
    $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);
}

if (isset($token['access_token'])) {
    $params = array(
        'uids'         => $token['user_id'],
        'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
        'access_token' => $token['access_token']
    );
}

$userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);

if (isset($userInfo['response'][0]['uid'])) {
    $userInfo = $userInfo['response'][0];
    $result = true;
}

if ($result) {
	require_once 'DB.php';

	// $dbhost = '127.0.0.1'; // Хост
	$dbuser = 'heavendb_user'; // Имя пользователя
	$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
	$dbname = 'heaven_db'; // Имя базы данных

	$DB = new DataBase();
	$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

	// $result = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['uid']."'");

	if ($result_ = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['uid']."'")) {
		
	// while (($row = mysql_fetch_assoc($result)) != false) {
	$row = mysql_fetch_assoc($result_);
		// if ($row['uid'] == $userInfo['uid']) {
			$flag = 1;
			// setcookie("id", $row['id'], time() + 10800);

			// session_start();
			// foreach ($row as $key => $value) {
			// 	if($key != "login" && $key != "password") {
			// 		$_SESSION[$key] = $value;
			// 	}
			// }
			ses($row);
		// }

	// }
	}
		
	if ($flag != 1) {
		$result = mysql_query("INSERT INTO  `h_users` ( `uid`, `login` ,  `password` ,  `firstName` ,  `lastName` ,  `role_id` ,  `status_id`, `birthDate`, `picture`, `gender` ) 
		VALUES (
		'".$userInfo['uid']."','"."User".$userInfo['uid']."',  '"."Pass".$userInfo['uid']."',  '".$userInfo['first_name']."',  '".$userInfo['last_name']."',  '14',  '1', '".$userInfo['bdate']."', '".$userInfo['photo_big']."', '".$userInfo['sex']."'
		)");

		$result_ = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['uid']."'");

		$row = mysql_fetch_assoc($result_);
		// if ($row['uid'] == $userInfo['uid']) {
			// $flag = 1;
			// setcookie("id", $row['id'], time() + 10800);

			// session_start();
			// foreach ($row as $key => $value) {
			// 	if($key != "login" && $key != "password") {
			// 		$_SESSION[$key] = $value;
			// 	}
			// }
		ses($row);

	// }
	}
	// else{
	// 	setcookie("login", $row['login'], time() + 10800);

	// 	session_start();
	// 	foreach ($row as $key => $value) {
	// 		$_SESSION[$key] = $value;
	// 	}
	// }
	header("Location:../personal_room.php");
}


// if ($result) {
//     echo "Социальный ID пользователя: " . $userInfo['uid'] . '<br />';
//     echo "Имя пользователя: " . $userInfo['first_name'] . '<br />';
//     echo "Ссылка на профиль пользователя: ". 'http://vk.com/' . $userInfo['screen_name'] . '<br />';
//     echo "Пол пользователя: " . $userInfo['sex'] . '<br />';
//     echo "День Рождения: " . $userInfo['bdate'] . '<br />';
//     echo '<img src="' . $userInfo['photo_big'] . '" />'; echo "<br />";
// }



?>