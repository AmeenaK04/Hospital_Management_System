<?php

function verifyUsers () {
    if (!isset($_POST['role']) or !isset($_POST['uname']) or !isset($_POST['pwd'])) {
        return;  // <-- return null;
    }
    $db = new SQLite3('Hospital.db');   //database connection 
        $sql = "SELECT Fname, Lname, DOB, Address, Email_Address, Department FROM Staff WHERE ROLE = :role AND Username = :username AND Password = :pass";
        $stmt = $db->prepare($sql);
        $stmt ->bindParam(':role',$_POST['role'], SQLITE3_TEXT);
        $stmt ->bindParam(':uname',$_POST['uname'], SQLITE3_TEXT);
        $stmt ->bindParam(':pwd',$_POST['pwd'], SQLITE3_TEXT);

        $result = $stmt->execute();

        $rows_array = [];
        while ($row=$result->fetchArray())
        {
            $rows_array[]= $row;
        }
        var_dump($rows_array);
        return $rows_array;
        }