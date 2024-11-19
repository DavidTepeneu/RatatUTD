<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "auth");

    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    $query = "SELECT * FROM login WHERE Username='$username' AND Password='$password'";
    
    $result = $conn->query($query);

    // Login successful
    if($result->num_rows == 1){
        header("Location: homepage.html");
        exit();
    }
    // Login failed
    else{
        $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "New user created successfully";
            header("Location: homepage.html");
            exit();
        } else {
            echo "ERROR";
            header("Location: error.html");
            exit();
        }
        
    }

    $conn->close();
}
    
?>