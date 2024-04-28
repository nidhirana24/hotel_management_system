<?php
include 'project.php';

$sql2 = "SELECT * FROM rooms WHERE status = 'available'";
$result = mysqli_query($conn,$sql2);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Room Number: " . $row["roomno"]. "<br>";
        echo "done";
    }
} else {
    echo "No available rooms";
}
mysqli_close($conn);
?>