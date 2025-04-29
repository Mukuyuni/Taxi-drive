<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pickup = $_POST['pickup'];
    $dropoff = $_POST['dropoff'];
    $rideType = $_POST['rideType'];

    // Insert ride booking into the database
    $sql = "INSERT INTO rides (pickup_location, dropoff_location, ride_type, user_id, status) VALUES (?, ?, ?, 1, 'Pending')"; // Assuming user_id = 1 for now
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $pickup, $dropoff, $rideType); 

    if ($stmt->execute()) {
        echo "Ride booked successfully!";
    } else {
        echo "Error: Unable to book the ride.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
