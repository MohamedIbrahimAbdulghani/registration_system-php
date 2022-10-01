<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "registration_system";

$dsn = "mysql:host=$host;dbname=$dbname";

$connection = new PDO($dsn, $user, $password);
