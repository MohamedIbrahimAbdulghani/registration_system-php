<?php

session_start();
require_once "../library/database.php";

if(!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

    $q = $connection->prepare("SELECT * FROM `users` WHERE `email` = ?");
    $q->execute([$email]);
    $result = $q->fetchObject();
    if($result) {
        // compare between password from user and hash
        $check = password_verify($password, $result->password);
        if($check) {
            $_SESSION["user_id"] = $result->id;
            $_SESSION["user_name"] = $result->name;
            $_SESSION["user_email"] = $result->email;
            $_SESSION["user_mobile"] = $result->mobile;

            header("Location: ../index.php");
        } else {
            $_SESSION["error"] = "Email or password not correct";
        }
    } else {
        $_SESSION["error"] = "Data not correct";
    }
    
    
} else {
    $_SESSION["error"] = "Please enter your data";
}

header("Location: ../login.php");