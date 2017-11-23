<?php

$client_id = "1034667517715-1uvlncgavuac3htnihdr6hiejgug113i.apps.googleusercontent.com";
$client_secret = "paLp_4hprwagblgsCIB15lY1";
$redirect_uri = "http://address-forever.com/cgi/google_auth.php";

$url = 'https://accounts.google.com/o/oauth2/auth';
 
$params = array(
    'redirect_uri'  => $redirect_uri,
    'response_type' => 'code',
    'client_id'     => $client_id,
    'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile'
);

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через Google</a></p>';
// https://accounts.google.com/o/oauth2/auth?redirect_uri=http://localhost/google-auth&response_type=code&client_id=333937315318-fhpi4i6cp36vp43b7tvipaha7qb48j3r.apps.googleusercontent.com&scope=https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile

if (isset($_GET['code'])) {
    $result = false;

    $params = array(
        'client_id'     => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri'  => $redirect_uri,
        'grant_type'    => 'authorization_code',
        'code'          => $_GET['code']
    );
 
    $url = 'https://accounts.google.com/o/oauth2/token';
}

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);
 
$tokenInfo = json_decode($result, true);

if (isset($tokenInfo['access_token'])) {
    $params['access_token'] = $tokenInfo['access_token'];
 
    $userInfo = json_decode(file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo' . '?' . urldecode(http_build_query($params))), true);
    if (isset($userInfo['id'])) {
        $userInfo = $userInfo;
        $result = true;
    }
}

// if ($result) {
//     echo "Социальный ID пользователя: " . $userInfo['id'] . '<br />';
//     echo "Имя пользователя: " . $userInfo['name'] . '<br />';
//     echo "Email: " . $userInfo['email'] . '<br />';
//     echo "Ссылка на профиль пользователя: " . $userInfo['link'] . '<br />';
//     echo "Пол пользователя: " . $userInfo['gender'] . '<br />';
//     echo '<img src="' . $userInfo['picture'] . '" />'; echo "<br />";
// }

if ($result) {
	require_once 'DB.php';

	// $dbhost = '127.0.0.1'; // Хост
	$dbuser = 'heavendb_user'; // Имя пользователя
	$dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
	$dbname = 'heaven_db'; // Имя базы данных

	$DB = new DataBase();
	$DB->Connect($dbhost, $dbuser, $dbpassword, $dbname);

	// $result = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['uid']."'");

	if ($result_ = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['id']."'")) {
		
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
		$result = mysql_query("INSERT INTO  `h_users` ( `uid`, `login` ,  `password` ,  `firstName` ,  `lastName` ,  `role_id` ,  `status_id`, `mail`, `picture`, `gender` ) 
		VALUES (
		'".$userInfo['id']."','"."User".$userInfo['id']."',  '"."Pass".$userInfo['id']."',  '".$userInfo['given_name']."',  '".$userInfo['family_name']."',  '14',  '1', '".$userInfo['email']."', '".$userInfo['picture']."', '".$userInfo['gender']."'
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
//     echo "Социальный ID пользователя: " . $userInfo['id'] . '<br />';
//     echo "Имя пользователя: " . $userInfo['name'] . '<br />';
//     echo "Email: " . $userInfo['email'] . '<br />';
//     echo "Ссылка на профиль пользователя: " . $userInfo['link'] . '<br />';
//     echo "Пол пользователя: " . $userInfo['gender'] . '<br />';
//     echo '<img src="' . $userInfo['picture'] . '" />'; echo "<br />";
// }

?>