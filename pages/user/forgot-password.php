<!doctype html>
<html lang="en">

<?php $title = "Forgot Password";
require_once("../../components/head.php"); ?>

<body>

    <div class="row align-items-center justify-content-center vertical-center user-body">
        <div class="card w-50">
            <div class="card-body">

                <form action="#" method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="login-addon"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="login-addon">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success btn-block">Send me a reset password email!</button>
                        <a href="forgot-password.php" class="form-text float-right form-bottom-text">Login instead?</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php require_once("../../components/scripts.php"); ?>

</body>

</html>