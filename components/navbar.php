<div class="container-fluid">
    <div class="row nav-background">

        <div class="col-1 p-2">
            <a href="../logout.php" class="btn btn-info btn-lg btn-block"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        <div class="col-2 p-2">
            <a href="../user/my-account.php" class="btn btn-info btn-lg btn-block"><i class="fas fa-user"></i> My Account</a>
        </div>

        <div class="col-9 my-auto">
            <h4 class="text-center">Welcome, <?php echo $_SESSION['username']; ?></h4>
        </div>

    </div>
</div>