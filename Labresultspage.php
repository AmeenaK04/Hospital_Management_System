<?php require("NavBar.php");
include_once("SQL/viewLabresultsSQL.php");
$user = getLabresultsDetails();
?>

<div class="container bgColor">
    <main role="main" class="pb-5">
        <h2><FONT COLOR=white><center>Lab Results Page</center></h2>
        <button type="button" class="btn btn-outline-light"><a href="Viewlabcity.php">Filter Page</button>
        <br></br>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <td><FONT COLOR=black>Lab Results ID</td>
                        <td><FONT COLOR=black>City</td>
                        <td><FONT COLOR=black>Type Of Test</td>
                        <td><FONT COLOR=black>Results</td>
                        <td><FONT COLOR=black>Normal Range</td>
                        <td><FONT COLOR=black>Concern</td>
                        <td><FONT COLOR=black>Patient ID</td>
                    </thead>

                    <?php
                    for ($i = 0; $i < count($user); $i++) :
                    ?>
                        <tr>
                            <td><FONT COLOR=white><?php echo $user[$i]['Lab_ResultsID'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['City'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Type_Of_Test'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Results'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Normal_Range'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Concern'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['PatientID'] ?></td>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>

    </main>
</div>


