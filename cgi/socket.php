<?php 
function smtp_send_cmd($smtp_socket, $cmd) { 
  $smtp_msg  = ""; 
  $smtp_code = ""; 
  fputs( $smtp_socket, $cmd."\r\n" );  
  while ($line = fgets($smtp_socket, 515)) { 
    $smtp_msg .= $line; 
    if (substr($line, 3, 1) == " ") break; 
  } 

  $smtp_code = substr( $smtp_msg, 0, 3 );  
  return $smtp_code=="" ? false : $smtp_code; 
}

$smtp_host = "127.0.0.1";
$smtp_port = "25";

$smtp_socket = fsockopen($smtp_host, $smtp_port) or die ('Не могу соединиться');   
while ($line = fgets($smtp_socket, 515)) { 
$smtp_msg .= $line; 
  if (substr($line, 3, 1) == " ") break; 
} 
// приняли ответ сервера, если он начинается на 220 - значит всё ок, сервер работает 
$answer = substr($smtp_msg, 0, 3); 
if($answer != '220') die ();  

echo $answer."<br>";

$localhost = "127.0.0.1";
// echo phpinfo();
// $localhost = $_SERVER['SERVER_ADDR'];
echo $localhost."<br>";
// посылаем серверу приветствие и свой адрес 
$answer = smtp_send_cmd($smtp_socket, 'HELO '.$localhost);   
if($answer != '250') die ();  
echo $answer;
// если всё ок, скажем серверу что хотим авторизоваться 
$answer = smtp_send_cmd($smtp_socket, 'AUTH LOGIN');  
if($answer != '334') die ("bad");
// если сервер работает через smtp авторизацию на исходящие, посылаем ему логин от ящика $smtp_user 
$smtp_user = "sdemin98@gmail.com";
$answer = smtp_send_cmd($smtp_socket, base64_encode($smtp_user));  
if($answer != '334') die (); 
// и пароль $smtp_pass 
$smtp_pass = "s.d.26.05.1998";
$answer = smtp_send_cmd($smtp_socket, base64_encode($smtp_pass));  
if($answer != '235') die (); 
echo $answer; 
// // говорим от кого 
// $from = "iseralion@gmail.com";
// $answer = smtp_send_cmd($smtp_socket, 'MAIL FROM:'.$from);  
// if($answer != '250') die (); 
// // и кому посылаем
// $to = "sdemin98@gmail.com"; 
// $answer = smtp_send_cmd($smtp_socket, 'RCPT TO:'.$to);  
// if($answer != '250') die (); 
// // сообщаем, что начинаем вводить данные: 
// $answer = smtp_send_cmd($smtp_socket, "DATA"); 
// if($answer != '354') die (); 
// // собственно сам процесс введения данных: 
// $data = "proverka";
// fputs($smtp_socket, $data."\r\n");  
// // говорим, что закончили посылать данные: 
// $answer = smtp_send_cmd($smtp_socket, "."); 
// if($answer != '250') die (); 
// // если всё ок, закрываем соединение с севером 
// $answer = smtp_send_cmd($smtp_socket, "QUIT"); 
// if($answer != '221') die (); 
fclose($smtp_socket); 

// echo "nice";

?>  