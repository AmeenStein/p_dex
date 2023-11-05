<?php
    require_once "constant.php";
    $conn = new mysqli($Host_Name, $Database_User, $Password, $Database_Name);
    if($conn->connect_error){
        print "Connection Failed: <br /> " . $conn->connect_error;
    }else{
        //print "connection successful";
    };
?>