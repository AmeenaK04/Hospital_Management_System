<?php
function getAppointmentDetails (){
$db = new SQLite3('Hospital.db');
$sql = "SELECT * FROM Appointment";
$stmt = $db->prepare($sql);
$result = $stmt->execute() ;

while ($row = $result->fetchArray()){ // use fetchArray (SQLITES_NUM) - another appro:
$arrayResult [] = $row; //adding a record until end of records
}
return $arrayResult;
}