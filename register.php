<?php include_once "library/header.php"; ?>

<div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center display-4 border my-5 p-2"> Register</h1>
            </div>
            <div class="col-sm-6 mx-auto">
                <!-- start validation if you success and inserted data -->
                <?php if(isset($_SESSION["success"])): ?>
                    <div class="alert alert-success text-center"><?php echo $_SESSION["success"] ?></div>
                    <!-- this is to delete message for inserted ot added data -->
                    <?php unset($_SESSION["success"]) ?>
                <?php endif; ?>

                <!-- if you don't success and not inserted the data -->
                <?php if(isset($_SESSION["error"])): ?>
                    <div class="alert alert-danger text-center"><?php echo $_SESSION["error"] ?></div>
                    <!-- this is to delete message for inserted ot added data -->
                    <?php unset($_SESSION["error"]) ?>
                <?php endif; ?>
                <!-- end validation  -->

                <div class="border p-5 ">
                    <form action="handler/register.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" placeholder="Your Mobile">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary"  value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once "library/footer.php"; ?>