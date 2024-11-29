<?php require("NavBar.php");
include_once("SQL/viewInpatientSQL.php");
$user = getInpatientDetails();

?>

<div class="container bgColor">
    <main role="main" class="pb-5">
        <h2><FONT COLOR=white><center>In-Patient Page</center></h2>
        <br>
        <style>
            body {
                    background-color: #04162A;
                }
        </style>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <td><FONT COLOR=black>In-Patient ID</td>
                        <td><FONT COLOR=black>Room</td>
                        <td><FONT COLOR=black>Days</td>
                        <td><FONT COLOR=black>Treatments</td>
                        <td><FONT COLOR=black>Ward</td>
                        <td><FONT COLOR=black>Condition</td>
                        <td><FONT COLOR=black>Surgery</td>
                        <td><FONT COLOR=black>Patient ID</td>
                    </thead>

                    <?php
                    for ($i = 0; $i < count($user); $i++) :
                    ?>
                        <tr>
                            <td><FONT COLOR=white><?php echo $user[$i]['In_PatientID'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Room'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Days'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Treatments'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Ward'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Condition'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Surgery'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['PatientID'] ?></td>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>

    </main>
</div>