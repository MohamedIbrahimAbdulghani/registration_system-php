<?php


// function registerFunction($name, $email, $mobile, $password) {
//     $connection_database = mysqli_connect("localhost", "root", "", "registration_system");
//     $insert_user = "INSERT INTO `users` (`name`, `email`, `mobile`, `password`) VALUES ('$name', '$email', '$mobile', '$password') ";
//     $query = mysqli_query($connection_database, $insert_user);
//     mysqli_affected_rows($connection_database);
// }

//     $host = "localhost";
//     $user = "root";
//     $password = "";
//     $dbname = "registration_system";

//     $dsn = "mysql:host=$host;dbname=$dbname";

//     $connection = new PDO($dsn, $user, $password);
// class db_connect {


//     function registerFunction($name, $email, $mobile, $password) {
        
//         $sql = $connection->prepare("INSERT INTO `user` (`name`, `email`, `mobile`, `password`) VALUES (?, ?, ?, ?)");
//         $q = $connection->prepare($sql);
//         $q->execute([$name, $email, $mobile, $password]);
//     }
// }