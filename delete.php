<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "auth");

    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    $sql = "DELETE FROM login WHERE Username='$username' AND Password='$password'";
    
    mysqli_query($conn, $sql);
    header("Location: index.html");
    exit();

    $conn->close();
}
    
?>