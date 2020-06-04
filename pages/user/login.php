<?php 
namespace appointmentSystem;
?>

<!doctype html>
<html lang="en">

<?php 


$title = "Login";
require_once("../../components/head.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    require_once("../../class/User.php");
   
    $user = new User();
    
    if($user->login($_POST['user_id'], $_POST['password'])){
        echo "Logged in.";
    }
    else {
        $alert_type = "danger";
        $alert_message = "This account does not exist or password incorrect.";
    }

    if($user->verifyLoggedIn()){
        $user->redirectUsersToIndexs("../../");
    }
}

?>

<body>

    <div class="row align-items-center justify-content-center vertical-center user-body">
        <div class="card w-50">
            <div class="card-body">

                <?php 
                require_once("../../components/alert.php");
                ?>

                <form action="#" method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="login-addon"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="user_id" type="text" class="form-control" placeholder="User ID" aria-label="User ID" aria-describedby="login-addon">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                        </div>
                        <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                        <a href="forgot-password.php" class="form-text float-right form-bottom-text">Forgot password?</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php require_once("../../components/scripts.php"); ?>

</body>

</html>