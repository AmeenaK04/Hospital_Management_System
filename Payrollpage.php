<?php require("NavBar.php");
include_once("SQL/viewPayrollSQL.php");
$user = getPayrollDetails();

?>

<div class="container bgColor">
    <main role="main" class="pb-5">
        <h2><FONT COLOR=white><center>Payroll Page</center></h2>
        <br>


        <?php if (isset($_GET['deleted'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show col-12" role="alert" style="font-weight: bold;">
                The user has been deleted
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['updated'])) : ?>
            <div class="alert alert-sucessful alert-dismissible fade show col-10" role="alert" style="font-weight: bold;">
                The record has been successful updated!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <td><FONT COLOR=black>Payroll ID</td>
                        <td><FONT COLOR=black>Salary</td>
                        <td><FONT COLOR=black>Hours</td>
                        <td><FONT COLOR=black>Bonus</td>
                        <td><FONT COLOR=black>Taxes</td>
                        <td><FONT COLOR=black>National Insurance</td>
                        <td><FONT COLOR=black>Staff ID</td>
                    </thead>

                    <?php
                    for ($i = 0; $i < count($user); $i++) :
                    ?>
                        <tr>
                            <td><FONT COLOR=white><?php echo $user[$i]['PayrollID'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Salary'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Hours'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Bonus'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Taxes'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['National_Insurance'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['StaffID'] ?></td>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>

    </main>
</div>