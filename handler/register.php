<?php
session_start();

require_once "../library/database.php";

if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["mobile"]) && !empty($_POST["password"])) {
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $mobile = filter_var($_POST["mobile"], FILTER_SANITIZE_STRING);
    $password = password_hash(filter_var($_POST["password"], FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);


    // $re = new db_connect();
    // $re->registerFunction($name, $email, $mobile, $password);

    $_SESSION['success'] = "data inserted";
} else {
    
    $_SESSION["error"] = "Error";
}
header("Location: ../register.php");