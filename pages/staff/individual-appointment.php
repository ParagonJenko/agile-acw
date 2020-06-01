<?php 
namespace appointmentSystem;
session_start();
?>
<!doctype html>
<html lang="en">

<?php $title = "Staff - Individual Appointment";
require_once("../../components/head.php"); 

require_once("../../class/Appointments.php"); 
require_once("../../class/User.php"); 
$appointmentsObj = new Appointments;

$appointment = $appointmentsObj->viewIndividualAppointment($_GET['id']);

if(isset($_GET['cancel_appointment']) && isset($_GET['cancel_appointment_id'])){
    $appointmentsObj->cancelAppointment($_GET['cancel_appointment_id']);
    header("Refresh:0, url=index.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $appointmentsObj->addNoteToAppointment($_GET['id'], $_POST['add-notes']);
    header("Refresh:0");
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
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                        <p>Appointment with: <?php echo $appointmentsObj->switchForDeps($appointment->role) . " - " . $appointment->forename . " " . $appointment->surname; ?></p>
                                <!-- <a href="#" class="small">See past appointments</a> -->
                        </div>
                        <a href="?cancel_appointment=true&cancel_appointment_id=<?php echo $appointment->id ?>" class="badge badge-danger p-3"><i class="fas fa-times-circle fa-3x"></i></a>
                    </li>
                </ul>

                <div>

                    <form action="#" method="POST">

                        <div class="form-group">
                            <label for="appointment-notes">Appointment Notes</label>
                            <textarea class="form-control" disabled rows="10"><?php foreach($appointmentsObj->viewIndividualAppointmentsNotes($_GET['id']) as $note){ echo $note->note . "\n";
                            } ?> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="add-notes"></label>
                            <textarea class="form-control" name="add-notes" placeholder="Add your own notes..."></textarea>
                        </div>

                   

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Add Note</a>
                </form>
            </div>

        </div>

    </div>


    <?php require_once("../../components/scripts.php"); ?>

</body>

</html>