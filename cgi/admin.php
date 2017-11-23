
<?php
	// $_GET;
	// echo $_GET['firstName'];
	// echo "<script>
		// window.a = 7;

	// </script>";
// echo "<script>
// 		window.a = ".$_GET['firstName'].";

// 	</script>";
// session_start();
// 	if ($_COOKIE['login'] != false && isset($_SESSION['login']) == false) {
// 		require_once 'DB.php';

// $dbhost = 'http://address-forever.com'; // Хост
// $dbuser = 'heavendb_user'; // Имя пользователя
// $dbpassword = 'x3kQ4JfOm9lDABD2ah7jidsam'; // Пароль
// $dbname = 'heaven_db'; // Имя базы данных

// $DB = new DataBase();
// $DB->Connect($dbhsot, $dbuser, $dbpassword, $dbname);
// // echo "nice";

// // mysql_query ("set_client='utf8'");
// // mysql_query ("set character_set_results='utf8'");
// // mysql_query ("set collation_connection='utf8_general_ci'");
// // mysql_query ("SET NAMES utf8");

// // $result = mysql_query("SELECT * FROM `h_users` WHERE `login` = 'admin'");
// $result = mysql_query("SELECT * FROM `h_users` WHERE `login` = '".$_COOKIE['login']."'");
// $row = mysql_fetch_assoc($result);

//  // echo "<script>
// 	// 	alert(\"".$_SESSION['login']."\");
		
// 	// </script>";

// 	foreach ($row as $key => $value) {
// 				// echo $key." => ".$value."<br>";
// 				$_SESSION[$key] = $value;
// 				// echo $_SESSION[$key]."<br>";
// 			}

// 		// alert(\"".$row['login']."\");

// 	}
// 	$DB->Close();

require_once 'session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include '../links.php' ?>
	<title>Document</title>
</head>
<body>

<script>
	$.ajax({
	url: "data.php",
	contentType: "text/html; charset=utf-8",
	dataType: "text html",
	success : function(data){
		var a = data;
		a = JSON.parse(a);
		// alert(a);
		$('body').append(a['firstName']);
	}
	});
</script>
	Страница одмина

</body>
</html>
			





