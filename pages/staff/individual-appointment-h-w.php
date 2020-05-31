<?php 
namespace appointmentSystem;
session_start();
?>
<!doctype html>
<html lang="en">

<?php $title = "Staff - Individual Appointment - Health & Wellbeing";
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
                            <p>Appointment with: Student - Robert Phillips</p>
                            <a href="#" class="small">See past appointments</a>
                        </div>
                        <div>
                            <form action="#" method="POST" class="float-left">
                                <select name="appointment-priority" class="form-control form-control-lg">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </form>
                            <a href="#" class="badge badge-danger p-3"><i class="fas fa-times-circle fa-3x"></i></a>
                        </div>
                    </li>
                </ul>

                <div>

                    <form action="#" method="POST">

                        <div class="form-group">
                            <label for="appointment-notes">Appointment Notes</label>
                            <textarea class="form-control" disabled rows="10">This is where notes on a user will be. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non consectetur lorem, eget pellentesque elit. Fusce suscipit hendrerit nibh, at convallis erat feugiat at. Duis lorem massa, tempus sit amet luctus vitae, consequat nec arcu. Sed convallis nec enim id convallis. Nunc sed malesuada velit. Proin vel aliquet dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a convallis nunc, ac maximus turpis. Mauris ante dolor, fringilla vitae dui a, auctor pharetra leo. Suspendisse varius commodo neque tristique placerat. Nulla nec dignissim lectus. Duis dignissim massa mi, id consectetur lacus consequat id. Nulla euismod mauris et tincidunt pharetra. Suspendisse finibus libero at leo finibus laoreet. </textarea>
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