<?php
 
// Простенький скрипт, для проверки работы связки PHP+MySQL.
// Скрипт выполняет подключение к серверу MySQL и, если успешно, то к базе данных.
// В значения переменных указываем свои данные!
 
 
$server = 'localhost'; // адрес сервера баз данных
$user = 'root'; // имя пользователя БД
$password = ''; //пароль пользователя
 
$dblink = mysqli_connect($server, $user, $password);
 
if($dblink)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');
 
$database = 'test_db'; // имя базы данных
$selected = mysqli_select_db($dblink, $database);
if($selected)
echo ' Подключение к базе данных прошло успешно.';
else
die(' База данных не найдена или отсутствует доступ.');
 
// Выполняем скрипт, и если соединение прошло успешно – получим такой ответ:
// Соединение установлено.
// Подключение к базе данных прошло успешно.
 
// А в случае ошибки:
// Ошибка подключения к серверу баз данных.
// База данных не найдена или отсутствует доступ.
 
// Если ошибка в логине или пароле – получим об этом сообщение такого вида:
// Warning: mysql_connect(): Access denied for user 'dbuser'@'localhost' (using password: YES)
// Ошибка подключения к серверу баз данных.
 
?>