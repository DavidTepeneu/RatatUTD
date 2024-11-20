<?php
    $uname=$_POST['name'];
    $restaurant=$_POST['restaurant'];
    $cuisine=$_POST['cuisine'];
    $address=$_POST['address'];
    $distance=$_POST['distance'];
    $rating=$_POST['rating'];
    $review=$_POST['review'];
    $item=$_POST['item'];
    $reason=$_POST['reason'];

    $conn=new mysqli('localhost', 'root', '', 'ratatutd', '3307');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Validate if the inputted user is in the database
        $query="SELECT *
                FROM user
                WHERE Username='$uname'";
        $user_result=$conn->query($query);

        if ($user_result->num_rows == 0) {
            echo "Please input a valid username! <br> <br>
                  Press back to try again.";
        } else {
            // Insert into restaurants table if needed
            $query="SELECT *
                    FROM restaurant
                    WHERE Res_name='$restaurant'";
            $res_result=$conn->query($query);

            if ($res_result->num_rows == 0) {
                $sql="INSERT INTO restaurant(Res_name, Cuisine, D_from_campus, Address)
                      VALUES ('$restaurant', '$cuisine', '$distance', '$address')";
                mysqli_query($conn, $sql);
            }

            // Insert into items table if needed
            $query="SELECT *
                    FROM food_item
                    WHERE I_name='$item'";
            $food_result=$conn->query($query);

            if ($food_result->num_rows == 0) {
                $sql="INSERT INTO food_item(Res_name, I_name, Photo)
                      VALUES ('$restaurant', '$item', '')";
                mysqli_query($conn, $sql);
            }

            // Insert into review table
            $sql="INSERT INTO review(Res_name, Rev_id, Rating, Rev_comment, I_comment, Username, Fav_item)
                  VALUES ('$restaurant', '100', '$rating', '$review', '$reason', '$uname', '$item')";
            mysqli_query($conn, $sql);

            header("Location: homepage.html");
       } $conn->close();
    } exit();
?>