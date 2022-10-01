<?php

    include_once "library/header.php";
    include_once "library/database.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_System</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center display-4 border p-3 my-5 "> Registration System Using PHP </h1>
                <?php if(isset($_SESSION["user_name"])): ?>
                    <h3>You are logged in </h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php include_once "library/footer.php"; ?>