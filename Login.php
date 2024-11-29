<?php 
require("Navbar.php");
require_once("Authenticate.php");

$nameErr = $pwderr = $invalidMesg = $roleerr = "";

if (isset($_POST['login'])) {

    if ($_POST["role"]==""){
        $roleerr = "Role is required";
      }

      if($_POST["uname"]=="") {
        $nameErr = "Username is required";
      } 
      
      if ($_POST["pwd"]==null) {
        $pwderr = "Password is required";
      }

    if($_POST['role'] != null && $_POST['uname'] != null && $_POST["pwd"] !=null) //only if these 3 fields have input the following will be processed.
    {
        $array_user = verifyUsers(); //verify user and get their username
        var_dump($array_user);
        echo "1";
        if ($array_user != null) {
        echo "2";
      
            if ($array_user[0]['Role']=="Doctor")
            {
                session_start(); //starts the session
                $_SESSION['fname'] = $array_user[0]['Fname'];
                $_SESSION['lname'] = $array_user[0]['Lname'];
                $_SESSION['staffID'] = $array_user[0]['StaffID'];
               
                header("Location: Doctorindex.php"); 
                exit();
            }

            if ($array_user[0]['Role']=="Receptionist")
            {
                session_start();
                $_SESSION['fname'] = $array_user[0]['Fname'];
                $_SESSION['lname'] = $array_user[0]['Lname'];
                $_SESSION['staffID'] = $array_user[0]['StaffID'];
               
                header("Location: Receptionistindex.php"); 
                exit();
            }

            if ($array_user[0]['Role']=="Admin")
            {
                session_start();
                $_SESSION['fname'] = $array_user[0]['Fname'];
                $_SESSION['lname'] = $array_user[0]['Lname'];
                $_SESSION['staffID'] = $array_user[0]['StaffID'];
               
                header("Location: AdminPage.php"); 
                exit();
            }

        }
        else{
            $invalidMesg = "Invalid username and password!";
        }
    }
}
 
?>

	<div class="container bgColor">
        <main role="main" class="pb-3">
            <h1><font color=white>LOGIN TO THE HOSPITAL MANAGMENT SYSTEM</h1>

            <div class="row">
                <div class="col-6">
                    <form method = "post">
                        <div class="form-group col-8">
                        <label class="control-label">ROLE</label>
                            <input class="form-control" type="text" name = "role">
                            <span class="text-danger"><?php echo $roleerr;?></span>
                        </div>

                        <div class="form-group col-8">
                            <label class="control-label">USERNAME</label>
                            <input class="form-control" type="text" name = "uname">
                            <span class="text-danger"><?php echo $nameErr;?></span>
                        </div>

                        <div class="form-group col-8">
                            <label class="control-label">PASSWORD</label>
                            <input class="form-control" type="password" name = "pwd">
                            <span class="text-danger"><?php echo $pwderr;?></span>
                        </div>
                        <br>
                        <div class="form-group col-5">
                            <input type="submit" value="Login" name = "login" class="btn btn-outline-success">
                        </div>
                        <div class="form-group col-5">
                            <button type="button" class="btn btn-outline-danger" href="Login.php">Cancel</button>
                        </div>
                    
                    </form>
                    <div class="text-danger">
                        <?php echo $invalidMesg; ?>
                    </div>
                </div>
            </div>

		</main>
	</div>


