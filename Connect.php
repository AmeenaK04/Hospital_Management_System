<?php

$db = new SQLite3('Hospital.db');

if ($db){
    echo "Database has been successfully connected";
}
else{
    echo "You have failed to connect to the database";
}
//Database connection check, allows me to see if the database is connected to the indexpage, i have used an if-else statement as a result. 