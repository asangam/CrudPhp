<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "crudphp";

$pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass, array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
