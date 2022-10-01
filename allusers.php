<?php  

include_once "library/header.php"; 
include_once "library/database.php";

if(!isset($_SESSION["user_name"])) {
    header("Location: index.php");
}

$q = $connection->prepare("SELECT * FROM `users` ");
$q->execute();
$i = 1;




?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-4 border my-5 p-2">All Users</h1>
        </div>
        <div class="col-sm-10 mx-auto">
            <div class="border my-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($q as $row): ?>
                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["mobile"] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php  include_once "library/footer.php"; ?>