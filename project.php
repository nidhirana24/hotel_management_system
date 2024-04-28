<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to Our Hotel</h1>
    <h2>Available Rooms</h2>
    <div id="available-rooms"></div>
    <h2>Book a Room</h2>
    <form id="book-room-form">
        <label for="roomno">Room Number:</label>
        <input type="text" id="roomno" name="roomno" required><br>
        <label for="custname">Your Name:</label>
        <input type="text" id="custname" name="custname" required><br>
        <button type="submit">Book Now</button>
    </form>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    else{
        echo "connected successfully";
        echo "<br>current host info:".$servername."<br>";
    }
    $sql="create database hotel";
    if (mysqli_query($conn,$sql)){
        echo "database connceted suucessfully".mysqli_connect_error($conn);
    }
    else{
        echo "failed";
    }
    mysqli_close($conn);
    ?>

    <script src="scripts.js"></script>
</body>
</html>










