<?php
// Database connection
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";      // Default XAMPP password
$dbname = "ratatutd"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, "3306");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch reviews
$sql = "SELECT Res_name, Rev_id, Rating, Rev_comment, I_comment, Username, Fav_item FROM reviews"; // Replace 'reviews' with your table name
$result = $conn->query($sql);

$reviews = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
} else {
    echo "0 results";
}

// Return reviews as JSON
echo json_encode($reviews);

$conn->close();
?>