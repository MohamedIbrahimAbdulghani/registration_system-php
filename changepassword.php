<?php

include_once "library/header.php"; 
include_once "library/database.php";

if(!isset($_SESSION["user_name"])) {
    header("Location: index.php");
}




?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-4 border my-5 p-2"> Change Password</h1>
            </div>
            <div class="col-sm-6 mx-auto">
                <!-- if you don't success and not inserted the data -->
                <?php if(isset($_SESSION["error"])): ?>
                    <div class="alert alert-danger text-center"><?php echo $_SESSION["error"] ?></div>
                    <!-- this is to delete message for inserted ot added data -->
                    <?php unset($_SESSION["error"]) ?>
                <?php endif; ?>
                <!-- end validation  -->
                <div class="border p-5 my-3">
                    <form action="handler/changepassword.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" placeholder="Your Old Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password" placeholder="Your New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm New Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php  include_once "library/footer.php"; ?>