<?php

function make_connection(){
    $ServerName = "localhost";
    $Default_db = "root";
    $ServerPassword = "";
    $db_Name = "test_db";
    
    $con = mysqli_connect($ServerName, $Default_db, $ServerPassword, $db_Name);
    
    if (!$con) {
        echo "Connection Failed";
    }

    return $con;
}
?>