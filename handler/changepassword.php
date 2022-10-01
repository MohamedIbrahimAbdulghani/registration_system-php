<?php

session_start();
require_once "../library/database.php";

if(!empty($_POST["old_password"]) && !empty($_POST["new_password"]) && !empty($_POST["confirm_password"])) {
    $old_password = filter_var($_POST["old_password"], FILTER_SANITIZE_STRING);
    $new_password = filter_var($_POST["new_password"], FILTER_SANITIZE_STRING);
    $confirm_password = filter_var($_POST["confirm_password"], FILTER_SANITIZE_STRING);

    $q = $connection->prepare("SELECT * FROM `users` WHERE `email` = ?");
    $q->execute([$_SESSION["user_email"]]);
    $result = $q->fetchObject();
    if($result) {
        // compare between password from user and hash
        $check = password_verify($old_password, $result->password);
        if($check) {
            if($new_password === $confirm_password) {
                $new_password = password_hash($new_password, PASSWORD_DEFAULT);
                $q = "UPDATE `users` SET `password` = ? WHERE `email` = ? ";
                $q = $connection->prepare($q);  
                $q->execute([$new_password, $_SESSION["user_email"]]);
                header("Location: ../show-data.php");
            } else {
                $_SESSION["error"] = "Passwords not the same";
            }
        } else {
            $_SESSION["error"] = "Password not correct";
        }
    } else {
        $_SESSION["error"] = "Data not correct";
    }
    
    
} else {
    $_SESSION["error"] = "Please enter your data";
}
