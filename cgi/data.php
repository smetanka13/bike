<?php
session_start();

$data = json_encode($_SESSION);

session_write_close();

mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");

echo $data;
?>