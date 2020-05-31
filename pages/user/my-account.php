<?php 
namespace appointmentSystem;
session_start();
?>
<!doctype html>
<html lang="en">

<?php $title = "My Account";
require_once("../../components/head.php"); 

if($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once("../../class/User.php");

    $user = new User();

    if($_POST['password'] == $_POST['confirm_password']){
        if($user->changePassword($_POST['password'])){
            $alert_type = "success";
            $alert_message = "Password changed";
        }
        else {
            $alert_type = "danger";
            $alert_message = "Password failed to update.";
        }
    }
}

?>

<body>

    <?php require_once("../../components/navbar.php"); ?>

    <div class="row align-items-center justify-content-center vertical-center user-body">
        <div class="card w-50">
            <div class="card-body">
            
                <?php 
                require_once("../../components/alert.php");
                ?>
            
                <form action="#" method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                        </div>
                        <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                        </div>
                        <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="password-addon">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success btn-block">Change my password!</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php require_once("../../components/scripts.php"); ?>

</body>

</html>