<?php

$client_id = '1681393191880419'; // Client ID
$client_secret = '2c90afc21bb9c3caa17d5ddd93303c81'; // Client secret
$redirect_uri = 'http://address-forever.com/cgi/fb_auth.php'; // Redirect URIs

$url = 'https://www.facebook.com/dialog/oauth';

$params = array(
    'client_id'     => $client_id,
    'redirect_uri'  => $redirect_uri,
    'response_type' => 'code',
    'scope'         => 'email,user_birthday'
);

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через Facebook</a></p>';

if (isset($_GET['code'])) {
    $result = false;

    $params = array(
        'client_id'     => $client_id,
        'redirect_uri'  => $redirect_uri,
        'client_secret' => $client_secret,
        'code'          => $_GET['code']
    );

    $url = 'https://graph.facebook.com/oauth/access_token';

    // $tokenInfo = null;
    // parse_str(file_get_contents($url . '?' . http_build_query($params)), $tokenInfo);
    // parse_str(file_get_contents($url . '?' . urldecode(http_build_query($params))), $tokenInfo);
    // print_r($tokenInfo);
    // echo "nice";

    $tokenInfo = json_decode(file_get_contents($url . '?' . urldecode(http_build_query($params))), true);

    if (count($tokenInfo) > 0 && isset($tokenInfo['access_token'])) {
        $params = array('access_token' => $tokenInfo['access_token']);

        $userInfo = json_decode(file_get_contents('https://graph.facebook.com/me' . '?' . urldecode(http_build_query($params))), true);

        if (isset($userInfo['id'])) {
            $userInfo = $userInfo;
            $result = true;
        }
    }
}

// if ($result) {
//         echo "Социальный ID пользователя: " . $userInfo['id'] . '<br />';
//         echo "Имя пользователя: " . $userInfo['name'] . '<br />';
//         echo "Email: " . $userInfo['email'] . '<br />';
//         echo "Ссылка на профиль пользователя: " . $userInfo['link'] . '<br />';
//         echo "Пол пользователя: " . $userInfo['gender'] . '<br />';
//         echo "ДР: " . $userInfo['birthday'] . '<br />';
//         echo '<img src="http://graph.facebook.com/' . $userInfo['id'] . '/picture?type=large" />'; echo "<br />";
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
            //     if($key != "login" && $key != "password") {
            //         $_SESSION[$key] = $value;
            //     }
            // }
            ses($row);
        // }

    // }
    }
        
    if ($flag != 1) {
        $result = mysql_query("INSERT INTO  `h_users` ( `uid`, `login` ,  `password` ,  `firstName` ,  `lastName` ,  `role_id` ,  `status_id`, `mail`, `picture`, `gender`, `birthDate` ) 
        VALUES (
        '".$userInfo['id']."','"."User".$userInfo['id']."',  '"."Pass".$userInfo['id']."',  '".$userInfo['first_name']."',  '".$userInfo['last_name']."',  '14',  '1', '".$userInfo['email']."', 'http://graph.facebook.com/" . $userInfo['id'] . "/picture?type=large', '".$userInfo['gender']."', '".$userInfo['birthday']."'
        )");

        $result_ = mysql_query("SELECT * FROM `h_users` WHERE `uid` = '".$userInfo['id']."'");

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