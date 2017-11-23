<?php

$client_id = '1255835648'; // Application ID
$public_key = 'CBAJILNLEBABABABA'; // Публичный ключ приложения
$client_secret = 'A22DC31630C7B32D9E2CB737'; // Секретный ключ приложения
$redirect_uri = 'http://address-forever.com/cgi/ok_auth.php'; // Ссылка на приложение

$url = 'http://www.odnoklassniki.ru/oauth/authorize';

$params = array(
    'client_id'     => $client_id,
    'response_type' => 'code',
    'redirect_uri'  => $redirect_uri
);

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через Одноклассники</a></p>';

if (isset($_GET['code'])) {
    $result = false;

    $params = array(
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code',
        'client_id' => $client_id,
        'client_secret' => $client_secret
    );

    $url = 'http://api.odnoklassniki.ru/oauth/token.do';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($curl);
    curl_close($curl);

    $tokenInfo = json_decode($result, true);

    if (isset($tokenInfo['access_token']) && isset($public_key)) {
        $sign = md5("application_key={$public_key}format=jsonmethod=users.getCurrentUser" . md5("{$tokenInfo['access_token']}{$client_secret}"));

        $params = array(
            'method'          => 'users.getCurrentUser',
            'access_token'    => $tokenInfo['access_token'],
            'application_key' => $public_key,
            'format'          => 'json',
            'sig'             => $sign
        );

        $userInfo = json_decode(file_get_contents('http://api.odnoklassniki.ru/fb.do' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['uid'])) {
            $result = true;
        }
    }
}

// if ($result) {
//     echo "Социальный ID пользователя: " . $userInfo['uid'] . '<br />';
//     echo "Имя пользователя: " . $userInfo['name'] . '<br />';
//     echo "Ссылка на профиль пользователя: " . 'http://www.odnoklassniki.ru/profile/' . $userInfo['uid'] . '<br />';
//     echo "Пол пользователя: " . $userInfo['gender'] . '<br />';
//     echo "День Рождения: " . $userInfo['birthday'] . '<br />';
//     echo '<img src="' . $userInfo['pic_2'] . '" />'; echo "<br />";
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

    if ($result_ = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['uid']."'")) {
        
    // while (($row = mysql_fetch_assoc($result)) != false) {
    $row = mysql_fetch_assoc($result_);
        // if ($row['uid'] == $userInfo['uid']) {
            $flag = 1;
            // setcookie("id", $row['id'], time() + 10800);

            // session_start();
            // foreach ($row as $key => $value) {
            //     if($key != "login" && $key != "password") {
            //         $_SESSION[$key] = $value;
            //     }
            // }
            ses($row);
        // }

    // }
    }
        
    if ($flag != 1) {
        $result = mysql_query("INSERT INTO  `h_users` ( `uid`, `login` ,  `password` ,  `firstName` ,  `lastName` ,  `role_id` ,  `status_id`,  `picture`, `gender`, `birthDate` ) 
        VALUES (
        '".$userInfo['uid']."','"."User".$userInfo['uid']."',  '"."Pass".$userInfo['uid']."',  '".$userInfo['first_name']."',  '".$userInfo['last_name']."',  '14',  '1', '".$userInfo['pic_2']."', '".$userInfo['gender']."', '".$userInfo['birthday']."'
        )");

        $result_ = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['uid']."'");

        $row = mysql_fetch_assoc($result_);
        // if ($row['uid'] == $userInfo['uid']) {
            // $flag = 1;
            // setcookie("id", $row['id'], time() + 10800);

            // session_start();
            // foreach ($row as $key => $value) {
            //     if($key != "login" && $key != "password") {
            //         $_SESSION[$key] = $value;
            //     }
            // }
        ses($row);

    // }
    }
    // else{
    //  setcookie("login", $row['login'], time() + 10800);

    //  session_start();
    //  foreach ($row as $key => $value) {
    //      $_SESSION[$key] = $value;
    //  }
    // }
    header("Location:../personal_room.php");
}
?>


