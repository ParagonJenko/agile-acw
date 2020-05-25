<!doctype html>
<html lang="en">

<?php $title = "Staff - Homepage";
require_once("../../components/head.php"); ?>

<body>

    <?php require_once("../../components/navbar.php"); ?>
    <?php require_once("../../components/alert.php"); ?>

    <div class="container-fluid">

        <div class="card my-2">

            <div class="card-header">
                <h2>My Appointments</h2>
            </div>

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <p>Appointment with: Health & Wellbeing</p>
                            <p>When: 15th March 2020</p>
                            <p>Where: Students Union - Room 1</p>
                        </div>
                        <a href="#" class="badge badge-success p-3"><i class="fas fa-sign-in-alt fa-3x"></i></a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <p>Appointment with: Academic Support Tutor</p>
                            <p>When: 20th March 2020</p>
                            <p>Where: Robert Blackburn - Room 211</p>
                        </div>
                        <a href="#" class="badge badge-success p-3"><i class="fas fa-sign-in-alt fa-3x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="card-footer">
                <a href="#" class="btn btn-primary float-right">View more...</a>
            </div>

        </div>

        <div class="card my-2">

            <div class="card-header">
                <h2>Book Appointments</h2>
            </div>

            <div class="card-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="appointment-with">Appointment with:</label>
                        <select class="form-control" name="appointment-with">
                            <option>Senior Management</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="appointment-time">When</label>
                        <input type="date" class="form-control" name="appointment-time">
                    </div>

                    <div>
                        <button class="btn btn-success btn-block">Search</button>
                    </div>
                </form>

                <div>
                    <p class="pb-1 pt-4 px-4">The health & wellbeing team are responsible for...Lorem ipsum dolor sit amet, consectetu ipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
                </div>

                <div class="row w-100">

                    <div class="col-2">
                        <a href="#" class="btn btn-outline-info btn-block">09:00</a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-outline-info btn-block">09:30</a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-outline-info btn-block">10:00</a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-outline-info btn-block">10:30</a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-outline-info btn-block">11:00</a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-outline-info btn-block">11:30</a>
                    </div>

                </div>

            </div>

            <div class="card-footer">
                <a href="#" class="btn btn-success float-right">Request Appointment</a>
            </div>

        </div>

    </div>


    <?php require_once("../../components/scripts.php"); ?>

</body>

</html>