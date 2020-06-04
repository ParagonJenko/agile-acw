<?php

namespace appointmentSystem;

session_start();
?>
<!doctype html>
<html lang="en">

<?php $title = "Staff - SMM";
require_once("../../components/head.php");

require_once("../../class/Appointments.php");
$appointmentObj = new Appointments;

$all_appointments = $appointmentObj->viewAllAppointments();
?>

<body>

    <?php require_once("../../components/navbar.php"); ?>
    <?php require_once("../../components/alert.php"); ?>

    <div class="container-fluid">

        <div class="card my-2">

            <div class="card-header">
                <h2>Staff Appointments</h2>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">With</th>
                            <th scope="col">Department</th>
                            <th scope="col">Cancelled</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($all_appointments as $appointment){
                            if($appointment->cancelled == 1){
                                $cancelled = "<span class='bg-danger text-white'>Cancelled</span>";
                            }
                            else {
                                $cancelled = "Not Cancelled";
                            }
                            
                            $role = $appointmentObj->switchForDeps($appointment->role);

                            echo '
                            <tr>
                                <th scope="row">'.$appointment->id.'</th>
                                <td>'.$appointment->date.' @ '.$appointment->start_time.'</td>
                                <td>'.$appointment->forename.' '.$appointment->surname.'</td>
                                <td>'.$role.'</td>
                                <td>'.$cancelled.'</td>
                            </tr>
                            ';
                        }
                        ?>
                    </tbody>
                </table>
                <?php

                ?>
            </div>

            <div class="card-footer">
                <a href="#" class="btn btn-primary float-right">View more...</a>
            </div>

        </div>

    </div>

    <?php require_once("../../components/scripts.php"); ?>


</body>

</html>