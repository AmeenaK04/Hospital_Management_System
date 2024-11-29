<?php
include("Navbar.php");
require_once("SQL/createstaffinsertSQL.php");
include("checkSession.php");
session_start(); //must start a session in order to use session in this page.
$path = "checkSession.php"; //this path is to pass to checkSession function from checkSession.php 
checkSession ($path); //calling the function from session.php



$errormsgstaffid = $errormsgfname = $errormsglname = $errormsgdob = $errormsgaddress = $errormsgeaddress= $errormsgdepartment = $errormsgusername = $errormsgpassword = $errormsgrole = $errormsglabresultsid = "";

$allFields = "yes";

if (isset($_POST['submit'])) {
        if ($_POST['staffid']==null){
            $errormsgstaffid = "Staff ID is mandatory";
            $allFields = "no";
        }
        if ($_POST['fname']==null){
            $errormsgfname = "Firstname is mandatory";
            $allFields = "no";
        }
        if ($_POST['lname']==null){
            $errormsglname = "Lastname is mandatory";
            $allFields = "no";
        }
        if ($_POST['dob']==null){
            $errormsgdob = "DOB is mandatory";
            $allFields = "no";
        }
        if ($_POST['address']==null){
            $errormsgaddress = "Address is mandatory";
            $allFields = "no";
        }
        if ($_POST['eaddress']==null){
            $errormsgeaddress = "Email Address is mandatory";
            $allFields = "no";
        }
        if ($_POST['department']==null){
            $errormsgdepartment = "Department is mandatory";
            $allFields = "no";
        }
        if ($_POST['username']==null){
            $errormsgusername = "Username is mandatory";
            $allFields = "no";
        }
        if ($_POST['password']==null){
            $errormsgaddress = "Password is mandatory";
            $allFields = "no";
        }
        if ($_POST['role']==null){
            $errormsgrole = "Role is mandatory";
            $allFields = "no";
        }
        if ($_POST['labresultsid']==null){
            $errormsglabresultsid = "Lab Result ID is mandatory";
            $allFields = "no";
        }
        if($allFields == "yes")
        {
            $createnewstaff = createnewstaff();
            echo $createnewstaff;
            header('Location: Createstaffpostcreation.php?createnewstaff='.$createnewstaff);
        }

    }

?>

<div class="container pb-5">
    <main role="main">
    <h2><FONT COLOR=white><center>Create New Staff</center></h2><br>
        <div class="row">
            <div class="col-6">
                <form method = "post">
                    <div class="form-group col-5">
                        <label style="font-weight: bold;">Staff ID:</label>
                        <input type="text" name="StaffID" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgstaffid; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Fname:</label>
                        <input type="text" name="Fname" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgfname; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Lname:</label>
                        <input type="text" name="Lname" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsglname; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">DOB:</label>
                        <input type="text" name="DOB" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgdob; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Address:</label>
                        <input type="text" name="Address" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgaddress; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Email Address:</label>
                        <input type="text" name="Email_Address" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgeaddress; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Department:</label>
                        <input type="text" name="Department" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgdepartment; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Username:</label>
                        <input type="text" name="Username" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgusername; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Password:</label>
                        <input type="text" name="Password" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgpassword; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Role:</label>
                        <input type="text" name="Role" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsgrole; ?></span>
                    </div>

                    <div class="form-group col-8">
                        <label style="font-weight: bold;">Lab_ResultsID:</label>
                        <input type="text" name="Lab_ResultsID" class="form-control "/>
                        <span class="text-danger"><?php echo $errormsglabresultsid; ?></span>
                    </div>

                    <div class="form-group col-7">

                            <?php 

                                $db = new SQLite3('Hospital.db');
                                $sql = "SELECT * FROM Staff ";
                                $stmt = $db->prepare($sql);
                                $result = $stmt->execute();

                                while($row=$result->fetchArray()){

                                    $course_array [] = $row;
                                }
                                
                            ?>  
                    </div> 

                                <div class="form-group col-5">
                                    <input type="submit" value="SUBMIT" name = "SUBMIT" class="btn btn-outline-success">
                                </div>        
                </form>
            </div>          
        </div>   
    </main>
</div>