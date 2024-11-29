<?php
function getInpatientDetails (){
$db = new SQLite3('Hospital.db');
$sql = "SELECT * FROM In_Patients";
$stmt = $db->prepare($sql);
$result = $stmt->execute() ;

while ($row = $result->fetchArray()){ // use fetchArray (SQLITES_NUM) - another appro:
$arrayResult [] = $row; //adding a record until end of records
}
return $arrayResult;
}