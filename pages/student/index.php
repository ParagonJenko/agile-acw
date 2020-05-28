<!doctype html>
<html lang="en">

<?php

use appointmentSystem\Appointments;

$title = "Student - Homepage";
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

                    <?php 
                        require_once("../../class/Appointments.php"); 
                        $appointments = Appointments::viewAllMyAppointments();

                        foreach ($appointments as $appointment) {
                            echo '
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <p>Appointment with: '.$appointment[0].'</p>
                                    <p>When: '.$appointment[1].'</p>
                                    <p>Where: '.$appointment[2].'</p>
                                </div>
                                <a href="#" class="badge badge-danger p-3"><i class="fas fa-times-circle fa-3x"></i></a>
                            </li>';
                        }
                    ?>
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
                            <option>Health & Wellbeing</option>
                            <option>Academic Support Tutor</option>
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