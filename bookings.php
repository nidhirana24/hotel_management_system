<?php
include 'project.php';
include 'bookings.php';

$room_number = $_POST['roomno'];
$customer_name = $_POST['custname'];

$sql = "INSERT INTO bookings (roomno, custname) VALUES ('$roomno', '$custname')";
if ($conn->query($sql) === TRUE) {
    echo "Booking successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>