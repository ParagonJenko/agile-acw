<div class="container-fluid">
    <div class="row nav-background">

        <div class="col-3 col-lg-2 p-2">
            <a href="../logout.php" class="btn btn-info btn-lg btn-block"><i class="fas fa-sign-out-alt"></i> <span class="d-none d-md-none d-lg-inline">Logout</span></a>
        </div>
        <div class="col-3 col-lg-2 p-2">
            <a href="../user/my-account.php" class="btn btn-info btn-lg btn-block"><i class="fas fa-user"></i> <span class="d-none d-md-none d-lg-inline">My Account</span></a>
        </div>

        <div class="col-6 col-lg-8 my-auto">
            <h4 class="text-center">Welcome, <?php echo $_SESSION['username']; ?></h4>
        </div>

    </div>
</div>