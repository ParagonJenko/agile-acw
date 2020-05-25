<!doctype html>
<html lang="en">

<?php $title = "Sign Up";
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

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="password-addon">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                        <a href="forgot-password.php" class="form-text float-right form-bottom-text">Forgot password?</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php require_once("../../components/scripts.php"); ?>

</body>

</html>