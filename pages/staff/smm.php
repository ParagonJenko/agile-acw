<?php 
namespace appointmentSystem;
session_start();
?>
<!doctype html>
<html lang="en">

<?php $title = "Staff - SMM";
require_once("../../components/head.php");
if (!isset($_GET['department'])) {
    $appointment_department = "AST";
} else {
    $appointment_department = $_GET['department'];
}

// Open/In Progress/Closed/Cancelled
switch ($appointment_department) {
    case "AST":
        $data = "[3, 2, 10, 5]";
        break;
    case "Health-Wellbeing":
        $data = "[5, 4, 16, 1]";
        break;
    case "Professor":
        $data = "[0, 1, 8, 2]";
        break;
    case "Senior-Management":
        $data = "[2, 1, 4, 1]";
        break;
    default:
        break;
}
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
                <div class="float-right">
                    <form action="#" method="get">
                        <select class="form-control" name="appointment-department" id="appointment-department">
                            <option selected value="<?php echo $appointment_department; ?>">Selected: <?php echo $appointment_department; ?></option>
                            <option value="AST">AST</option>
                            <option value="Health-Wellbeing">Health & Wellbeing</option>
                            <option value="Professor">Professor</option>
                            <option value="Senior-Management">Senior Management</option>
                        </select>
                    </form>

                    <script>
                        document.getElementById('appointment-department').addEventListener('change', function() {
                            window.location = '?department=' + this.value;
                            console.log('You selected: ', this.value);
                        });
                    </script>

                </div>
                <canvas id="myChart"></canvas>
            </div>

            <div class="card-footer">
                <a href="#" class="btn btn-primary float-right">View more...</a>
            </div>

        </div>

    </div>

    <?php require_once("../../components/scripts.php"); ?>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Open', 'In Progress', 'Closed', 'Cancelled'],
                datasets: [{
                    label: '# of Appointments',
                    data: <?php echo $data; ?>,
                    backgroundColor: [
                        'rgba(191, 191, 63, 0.2)',
                        'rgba(191, 127, 63, 0.2)',
                        'rgba(63, 191, 63, 0.2)',
                        'rgba(191, 63, 63, 0.2)'
                    ],
                    borderColor: [
                        'rgba(191, 191, 63, 1)',
                        'rgba(191, 127, 63, 1)',
                        'rgba(63, 191, 63, 1)',
                        'rgba(191, 63, 63, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {}
        });
    </script>

</body>

</html>