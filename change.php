<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];

    $conn = new mysqli("localhost", "root", "", "auth");

    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    $sql = "UPDATE login SET password='$newpassword' WHERE username='$username' AND password='$oldpassword'";

    // Login successful
    if($conn->query($sql) === TRUE){
        echo "Successfully changed the password";
        header("Location: index.html");
        exit();
    }
    // Login failed
    else{
        echo "ERROR";
        exit();
    }

    $conn->close();
}
    
?>