<?php require("NavBar.php");
include_once("SQL/viewlabcitySQL.php"); 
$city = array("All","Sheffield","London","Manchester","Leeds");
$user = getlabcity();
?>
      

  <div class="container container-fluid pb-5">
        <main role="main">
        <h2><FONT COLOR=white><center>View and Filter City in Lab result</center></h2><br>
     
            <div class="row">
                <div class="col-md-6">
                    <form method="post">
                        <div class="form-group">
                            <label class="control-label">Filter Lab results By City : </label>
                            <select type="text" style="width:80px;" name="filtercity">
                                <?php for ($i=0; $i<count($city); $i++): ?>
                                    <option <?php if(isset($_POST['filtercity']) && ($city[$i]==$_POST['filtercity'])) echo "selected"; ?>><?php echo $city[$i] ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-group">
                          <button type = "submit" name="submit" value = "Filter" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
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
                        <?php endfor;  ?>
                    </table>
                </div>
            </div>
        </main>
    </div>