<?php
$bd_server = "localhost";

$bd_login = 'ialmiev77m';//логин базы данных

$bd_pass = 'Парольвводитут';//пароль базы данных

$bd_name = 'ialmiev77m';//имя базы данных
 
mysql_connect($bd_server, $bd_login, $bd_pass)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных!</p>");
mysql_select_db($bd_name)//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных!</p>");
mysql_query("SET NAMES utf8");
?>