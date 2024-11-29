<?php 
include("checkSession.php");
include("Navbarside.php");
 session_start(); //must start a session in order to use session in this page.
 $path = "Login.php"; //this path is to pass to checkSession function from session.php 
 if (!isset($_SESSION['name'])){
	session_unset();
	session_destroy();
	header("Location:".$path);//return to the login page
 }
 $user = $_SESSION['name']; 
 ?>

 
<style>
	
 </style>

	<div class="container bgColor">
    <main role="main" class="pb-3">
		<h1><FONT COLOR=white><center>Welcome to the Admin Page</center></h2><br>
		<div><p>Hello <?php echo ucfirst($user); ?></p></div>

			<?php
				print "This page appears after successful logged in!";
 			?>
			<br><br>
			 <div class="buttons">
        <button type="button" class="btn btn-outline-light"><a href="AllPatientpage.php">Patient's Page</button>
        <button type="button" class="btn btn-outline-light"><a href="AllStaffpage.php">Staff Page</button>
        <button type="button" class="btn btn-outline-light"><a href="Departmentpage.php">Departments Page</button>
        <button type="button" class="btn btn-outline-light"><a href="Createnewstaff.php" >Create New Staff  </button>
        <button type="button" class="btn btn-outline-light"><a href="Payrollpage.php">Payroll</button>
        <button type="button" class="btn btn-outline-light"><a href="Createnewpatient.php">Create New Patient</button>
        <button type="button" class="btn btn-outline-light"><a href="Inpatientpage.php">In Patient Page</button>




			 </div>
		</main>
	</div>
