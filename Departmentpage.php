<?php require("NavBar.php");
include_once("SQL/viewDepartmentSQL.php");
$user = getDepartmentDetails();

?>

<div class="container bgColor">
    <main role="main" class="pb-5">
        <h2><FONT COLOR=white>Department Page</h2>
        <br>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="table-light">
                        <td><FONT COLOR=black>Department ID</td>
                        <td><FONT COLOR=black>Type Of Staff</td>
                        <td><FONT COLOR=black>Transfer</td>
                        <td><FONT COLOR=black>Staff ID</td>
                    </thead>

                    <?php
                    for ($i = 0; $i < count($user); $i++) :
                    ?>
                        <tr>
                            <td><FONT COLOR=white><?php echo $user[$i]['DepartmentID'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Type_Of_Staff'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['Transfer'] ?></td>
                            <td><FONT COLOR=white><?php echo $user[$i]['StaffID'] ?></td>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>

    </main>
</div>