<?php

function createStudent()
{
    $created = false;
    $db = new SQLite3('Hospital.db');
    $sql = 'INSERT INTO Staff(StaffID, Fname, Lname, DOB, Address, Email_Address, Department, Username, Password, Role, Lab_ResultID) VALUES (:sID, :sfname, :slname, :sdob, :sadd, :semailadd, :sdep, :suser, :spass, :srole, :slabID)';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':sID', $_POST['StaffID'], SQLITE3_TEXT);
    $stmt->bindParam(':sfname', $_POST['Fname'], SQLITE3_TEXT);
    $stmt->bindParam(':slname', $_POST['Lname'], SQLITE3_TEXT);
    $stmt->bindParam(':sdob', $_POST['DOB'], SQLITE3_TEXT);
    $stmt->bindParam(':sadd', $_POST['Address'], SQLITE3_TEXT);
    $stmt->bindParam(':semailadd', $_POST['Email_Address'], SQLITE3_TEXT);
    $stmt->bindParam(':sdep', $_POST['Department'], SQLITE3_TEXT);
    $stmt->bindParam(':suser', $_POST['Username'], SQLITE3_TEXT);
    $stmt->bindParam(':spass', $_POST['Password'], SQLITE3_TEXT);
    $stmt->bindParam(':srole', $_POST['Role'], SQLITE3_TEXT);
    $stmt->bindParam(':slabID', $_POST['Lab_ResultID'], SQLITE3_TEXT);

    $stmt->execute();

    if($stmt){
        $created = true;
    }

    return$created;

}

?>