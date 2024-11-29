<?php require("NavBar.php");
include_once("SQL/ViewPatientSQL.php");
$user = getAllpatientDetails();

?>

<div class="container bgColor">
    <main role="main" class="pb-5">
        <h2><FONT COLOR=white><center>All Patient Page</center></h2>
        <button type="button" class="btn btn-outline-light"><a href="Referpatient.php">Refer</button>
        <br></br>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <td><FONT COLOR=black>Patient ID</td>
                        <td><FONT COLOR=black>First Name</td>
                        <td><FONT COLOR=black>Last Name</td>
                        <td><FONT COLOR=black>Telephone</td>
                        <td><FONT COLOR=black>Address</td>
                        <td><FONT COLOR=black>Bloodtype</td>
                        <td><FONT COLOR=black>Date Of Birth</td>
                        <td><FONT COLOR=black>Action</td>
                        
                    </thead>

                    <?php
                    for ($i = 0; $i < count($user); $i++) :
                    ?>
                        <tr>
                            <td><FONT COLOR=white><?php echo $user[$i]['PatientID'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Fname'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Lname'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Telephone'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Address'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Bloodtype'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['DOB'] ?></td>
                            <td><FONT COLOR=white><a class="btn btn-outline-light">View</a>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>

    </main>
</div>