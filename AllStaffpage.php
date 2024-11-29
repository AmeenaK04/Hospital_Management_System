<?php require("NavBar.php");
include_once("SQL/ViewStaffSQL.php");
$user = getAllStaffDetails();

?>

<div class="container bgColor">
    <main role="main" class="pb-5">
        <h2><FONT COLOR=white><center>All Staff Page</center></h2>
        <button type="button" class="btn btn-outline-light"><a href="Createnewstaff.php">CREATE NEW STAFF</button>
        <br><br>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <td><FONT COLOR=black>Staff ID</td>
                        <td><FONT COLOR=black>First Name</td>
                        <td><FONT COLOR=black>Last Name</td>
                        <td><FONT COLOR=black>Date Of Birth</td>
                        <td><FONT COLOR=black>Address</td>
                        <td><FONT COLOR=black>Email Address</td>
                        <td><FONT COLOR=black>Department</td>
                        <td><FONT COLOR=black>Username</td>
                        <td><FONT COLOR=black>Password</td>
                        <td><FONT COLOR=black>Role</td>
                        <td><FONT COLOR=black>Lab Results ID</td>
                    </thead>

                    <?php
                    for ($i = 0; $i < count($user); $i++) :
                    ?>
                        <tr>
                            <td><FONT COLOR=white><?php echo $user[$i]['StaffID'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Fname'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Lname'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['DOB'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Address'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Email_Address'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Department'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Username'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Password'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Role'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Lab_ResultsID'] ?></td>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>
    </main>
</div>