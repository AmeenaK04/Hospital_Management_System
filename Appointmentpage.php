<?php require("NavBar.php");
include_once("SQL/viewAppointmentSQL.php");
$user = getAppointmentDetails();

?>

<div class="container bgColor">
    <main role="main" class="pb-5">
        <h2><FONT COLOR=white><center>Appointment Page</center></h2>
        <br>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <td><FONT COLOR=black>Appointment ID</td>
                        <td><FONT COLOR=black>Telephone</td>
                        <td><FONT COLOR=black>Address</td>
                        <td><FONT COLOR=black>Issue</td>
                        <td><FONT COLOR=black>Time</td>
                        <td><FONT COLOR=black>Appointment Doctor</td>
                        <td><FONT COLOR=black>PatientID</td>
                    </thead>

                    <?php
                    for ($i = 0; $i < count($user); $i++) :
                    ?>
                        <tr>
                            <td><FONT COLOR=white><?php echo $user[$i]['AppointmentID'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Telephone'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Address'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Issue'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Time'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Appointment_Doctor'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['PatientID'] ?></td>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>

    </main>
</div>