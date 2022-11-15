<?php
$db = new mysqli("db", "app", "app_password", "db_name");
if($db->connect_error){
    die("Ошибка: " . $db->connect_error);
}
var_dump($db);