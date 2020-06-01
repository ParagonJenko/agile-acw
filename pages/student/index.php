<?php 
namespace appointmentSystem;
session_start();
?>
<!doctype html>
<html lang="en">

<?php

use appointmentSystem\Appointments;

$title = "Student - Homepage";
require_once("../../components/head.php"); 

require_once("../../class/Appointments.php"); 
require_once("../../class/User.php"); 
$appointmentsObj = new Appointments;

if(isset($_GET['cancel_appointment']) && isset($_GET['cancel_appointment_id'])){
    $appointmentsObj->cancelAppointment($_GET['cancel_appointment_id']);
    header("Refresh:0, url=index.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $appointmentsObj->addAppointment($_POST['date'], $_POST['time'], $_SESSION['user_id'], $_POST['with']);
}

?>

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
                        
                        $appointments = $appointmentsObj->viewAllMyAppointments($_SESSION['user_id']);

                        foreach ($appointments as $appointment) {
                            echo '
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <p>Appointment with: '.$appointmentsObj->switchForDeps($appointment->role).'</p>
                                    <p>When: '.date("d-m-Y", strtotime($appointment->date)).' @ '.$appointment->start_time.'</p>
                                </div>
                                <a href="?cancel_appointment=true&cancel_appointment_id='.$appointment->id.'" class="badge badge-danger p-3"><i class="fas fa-times-circle fa-3x"></i></a>
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
                        <select class="form-control" name="with">
                            <?php 
                            foreach(User::getAllStaff() as $staff){
                                $role = $appointmentsObj->switchForDeps($staff->role);
                                echo "<option value='".$staff->id."'>".$role." - ".$staff->forename." ".$staff->surname."</option>";
                            }
                            ?>
                            
                            <option value="ast">Academic Support Tutor</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="col-6 form-group">
                            <label for="appointment-time">When</label>
                            <input type="date" class="form-control" name="date">
                        </div>

                        <div class="col-6 form-group">
                            <label for="appointment-time">When</label>
                            <input type="time" class="form-control" name="time">
                        </div>
                    </div>
                    

                    <div>
                        <button class="btn btn-success btn-block" type="submit">Book Appointment</button>
                    </div>
                </form>

                <div>
                    <p class="pb-1 pt-4 px-4">The health & wellbeing team are responsible for...Lorem ipsum dolor sit amet, consectetu ipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
                </div>

                <!-- <div class="row w-100">

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

                </div> -->

            </div>

            <div class="card-footer">
                <a href="#" class="btn btn-success float-right">Request Appointment</a>
            </div>

        </div>

    </div>


    <?php require_once("../../components/scripts.php"); ?>

</body>

</html>